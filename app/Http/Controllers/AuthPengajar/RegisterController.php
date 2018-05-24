<?php
namespace App\Http\Controllers\AuthPengajar;
use App\Http\Controllers\Controller;
use App\Pengajar;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
    use RegistersUsers;
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */

    protected $redirectTo = '/pengajar';

    public function __construct()
    {
        $this->middleware('guest');
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all(),$request)));

        $this->guard()->login($user);

        return $this->registered($request, $user)
            ?: redirect($this->redirectPath());
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data,Request $request)
    {
        return Pengajar::create([
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'nama' => $data['name'],
            'tempat_lahir' => $data['tempat_lahir'],
            'tgl_lahir' => $data['tanggal_lahir'],
            'alamat' => $data['alamat'],
            'agama' => $data['agama'],
            'jenis_kelamin' => $data['jenis_kelamin'],
            'no_hp' => $data['no_hp'],
            'jenjang_pendidikan_terakhir' => $data['pendidikan'],
            'nama_institusi_pendidikan' => $data['nama_institusi_pendidikan'],
            'lokasi_penyimpanan_cv' => $this->upload($data,'cv'),
            'lokasi_penyimpanan_pas_foto' => $this->upload($data,'photo'),
            'skor_tes_pengajar' => -1,
            'status_kelulusan' => 0,
            'nomor_pendaftaran' => random_int(1000,9999),
            'id_kelompok_pengajar' => NULL
        ]);
    }
    private  function upload(Array $data,$type){
        $file = $data[$type];
        $filename = Carbon::now()->toDateString().$file->getFilename().'.'.$file->getClientOriginalExtension();
//           save nama file berdasarkan tanggal upload+nama file
        $path = $file->storeAs('pengajar',$filename,'local');
//           save gambar yang di upload di public storage
        return $path;
    }

    protected function guard()
    {
        return Auth::guard('pengajar');
    }

    public function showRegistrationForm()
    {
        return view('registrasi');
    }

}