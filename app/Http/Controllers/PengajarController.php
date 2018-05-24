<?php

namespace App\Http\Controllers;

use App\Jadwal_pelatihan;
use App\Kelompok_pengajar;
use App\Pengajar;
use App\Materi_pelatihan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

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

    public function index_rekrutmen()
    {
        //
        $pengajar = Pengajar::all();
        return view('bagian_rekrutmen.input_data_pengajar_lulus')->with('pengajar', $pengajar);
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
        return view('bagian_rekrutmen.detail_pengajar')->with('pengajar', $pengajar);
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
        return view('bagian_rekrutmen.edit_data_pengajar')->with('pengajar', $pengajar);
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
        $pengajar->status_kelulusan = $request->input('status_kelulusan');
        $pengajar->save();
        return redirect()->route('rekrutmen')->with('message','Berhasil merubah status kelulusan')->with('type','success');
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
        if(is_null($pengajar))return redirect()->route('rekrutmen')->with('message','Gagal menghapus pengajar')->with('type','error');
        $pengajar->delete();
        return redirect()->route('rekrutmen')->with('message','Selamat datang')->with('type','success');
    }

    public function viewSeleksi(){
        $pengajar = Auth::guard('pengajar')->user();
        if($pengajar->status_kelulusan == 1){
            return view('pengajar.lulus');
        }
        else{
            return view('pengajar.tidak_lulus');
        }
    }

    public function kelompok(Pengajar $pengajar){
        return view('pengajar.kelompok_pengajar')->with('pengajar',$pengajar);
    }

    public function tempatPenugasan(Pengajar $pengajar){
        return view('pengajar.tempat_penugasan')->with('pengajar',$pengajar);
    }


    public function jadwal_pelatihan(){
        $jadwal = Jadwal_pelatihan::all();
        return view('pengajar.jadwal_pelatihan')->with('jadwal',$jadwal);
    }

    public function materi_pelatihan(){
        $materi = Materi_pelatihan::all();
        return view('pengajar.materi_pelatihan')->with('materi',$materi);
    }

    public function kelompok_pengajar(Pengajar $pengajar){
        $kelompok = Kelompok_pengajar::where('id', $pengajar->id_kelompok_pengajar)->first();
        return view('pengajar.kelompok_pengajar', compact('kelompok'));
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
