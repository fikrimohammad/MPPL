<?php

namespace App\Http\Controllers;

use App\Jadwal_pelatihan;
use App\Materi_pelatihan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MateriPelatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('pegawai:2')->except('logout','download_materi');
        $this->middleware('auth:pengajar')->only('download_materi');
    }

    public function index()
    {
        $materi_pelatihan = Materi_pelatihan::all();
        return view('bagian_pelatihan.materi_pelatihan')->with('materi_pelatihan',$materi_pelatihan);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //pegawai mengupload materi baru --> perbaiki form!
        $jadwal_pelatihan = Jadwal_pelatihan::all();
        return view('bagian_pelatihan.upload_materi_pelatihan', compact('jadwal_pelatihan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $materi_pelatihan = New Materi_pelatihan;
        $materi_pelatihan->nama = $request->input('nama_materi_pelatihan');
        $materi_pelatihan->id_jadwal_pelatihan = $request->input('id_jadwal_pelatihan');
        if($request->hasFile('materi_pelatihan')){
            $materi_pelatihan->lokasi_penyimpanan = $this->upload($request);
        }
        $materi_pelatihan->save();
        return $this->index();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Materi_pelatihan  $materi_pelatihan
     * @return \Illuminate\Http\Response
     */
    public function show(Materi_pelatihan $materi_pelatihan)
    {
        //
        return view('bagian_pelatihan.detail_materi')->with('materi_pelatihan',$materi_pelatihan);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Materi_pelatihan  $materi_pelatihan
     * @return \Illuminate\Http\Response
     */
    public function edit(Materi_pelatihan $materi_pelatihan)
    {
        //
        $jadwal_pelatihan = Jadwal_pelatihan::all();
        return view('bagian_pelatihan.edit_materi', compact('jadwal_pelatihan'))->with('materi_pelatihan', $materi_pelatihan);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Materi_pelatihan  $materi_pelatihan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materi_pelatihan $materi_pelatihan)
    {
        //
        $materi_pelatihan->id_jadwal_pelatihan = $request->input('id_jadwal_pelatihan');
        $materi_pelatihan->nama = $request->input('nama');
        if($request->hasFile('materi_pelatihan')){
            Storage::disk('local')->delete($materi_pelatihan->lokasi_penyimpanan);
            $materi_pelatihan->lokasi_penyimpanan = $this->upload($request);
        }
        $materi_pelatihan->save();
        return redirect()->route('materi_pelatihan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Materi_pelatihan  $materi_pelatihan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materi_pelatihan $materi_pelatihan)
    {
        //
        Storage::disk('public')->delete($materi_pelatihan->lokasi_penyimpanan);
        $materi_pelatihan->delete();
        return $this->index();
    }

    public function download_materi(Materi_pelatihan $materi_pelatihan){
        return Storage::download($materi_pelatihan->lokasi_penyimpanan);
    }

    private function upload(Request $request){
        $file = $request->file('materi_pelatihan');
        $filename = Carbon::now()->toDateString().$file->getFilename().'.'.$file->getClientOriginalExtension();
        $path = $file->storeAs('public/files/materi_pelatihan',$filename,'local');
        return $path;
    }
}
