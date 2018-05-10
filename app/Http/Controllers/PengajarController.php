<?php

namespace App\Http\Controllers;

use App\Pengajar;
use App\Materi_pelatihan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PengajarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('menu_pengajar');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('registrasi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $pengajar = New Pengajar;
        $pengajar->nama = $request->input('nama');
        $pengajar->tempat_lahir = $request->input('tempat_lahir');
        $pengajar->tanggal_lahir = $request->input('tanggal_lahir');
//        tempat tanggal lahir belum ada
        $pengajar->alamat = $request->input('alamat');
        $pengajar->agama = $request->input('agama');
        $pengajar->no_hp = $request->input('no_hp');
//        no hp blom ada
        $pengajar->email = $request->input('pengajar');
        $pengajar->password = bcrypt($request->input('password'));
//        password belum ada
        $pengajar->jenjang_pendidikan_terakhir = $request->input('pendidikan');
        $pengajar->nama_institusi_pendidikan = $request->input('namaInstitusiPendidikan');
        $pengajar->lokasi_penyimpanan_cv = $this->upload($request,'cv');
        $pengajar->lokasi_penyimpanan_pas_foto = $this->upload($request,'pasFoto');
        $pengajar->nomor_pendaftaran = random_int(1000,9999);

        return view('menu_pengajar');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pengajar  $pengajar
     * @return \Illuminate\Http\Response
     */
    public function show(Pengajar $pengajar)
    {
        //
        $all = Pengajar::all();
        return view('listPengajar')->with('pengajar',$all);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pengajar  $pengajar
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengajar $pengajar)
    {
        //
        return view('bagian_rekrutmen.edit_data_pengajar')->with('pengajar',$pengajar);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pengajar  $pengajar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengajar $pengajar)
    {
        //
        $pengajar->nama = $request->input('nama');
        $pengajar->tempat_lahir = $request->input('tempat_lahir');
        $pengajar->tanggal_lahir = $request->input('tanggal_lahir');
//        tempat tanggal lahir belum ada
        $pengajar->alamat = $request->input('alamat');
        $pengajar->agama = $request->input('agama');
        $pengajar->no_hp = $request->input('no_hp');
//        no hp blom ada
        $pengajar->email = $request->input('pengajar');
        $pengajar->password = bcrypt($request->input('password'));
//        password belum ada
        $pengajar->jenjang_pendidikan_terakhir = $request->input('pendidikan');
        $pengajar->nama_institusi_pendidikan = $request->input('namaInstitusiPendidikan');
        if($request->hasFile('cv')){
            Storage::disk('public')->delete($pengajar->lokasi_penyimpanan_cv);
            $pengajar->lokasi_penyimpanan_cv = $this->upload($request,'cv');
        }
        if($request->hasFile('pasFoto')){
            Storage::disk('public')->delete($pengajar->lokasi_penyimpanan_pas_foto);
            $pengajar->lokasi_penyimpanan_pas_foto = $this->upload($request,'pasFoto');
        }

        $pengajar->nomor_pendaftaran = random_int(1000,9999);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pengajar  $pengajar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengajar $pengajar)
    {
        //
        $pengajar->delete();
        return true;
    }

    public function viewSeleksi(){
        $pengajar = Pengajar::where('status_kelulusan',1)->get();
        return view('pengumuman_seleksi')->with('pengajar',$pengajar);
    }

    public function kelompok(){
        return view('kelompok_pengajar');
    }

    public function materi_pelatihan(){
        $materi = Materi_pelatihan::all();
        return view('pengajar.materi_pelatihan')->with('materi',$materi);
    }

    private  function upload(Request $request,$upload_form){
        if($request->hasFile($upload_form)){
//            apakah user mengupload file
            $file = $request->file($upload_form);
            $filename = Carbon::now()->toDateString().$file->getFilename().'.'.$file->getClientOriginalExtension();
//            save nama file berdasarkan tanggal upload+nama file
            $path = $file->storeAs('pengajar',$filename,'public');
//            save gambar yang di upload di public storage
            return $path;
        }
    }





}
