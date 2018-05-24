<?php

namespace App\Http\Controllers;
use App\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('pegawai:1')->only('menuRekrutmen');
        $this->middleware('pegawai:2')->only('menuPelatihan');
        $this->middleware('pegawai:3')->only('menuPenugasan');
    }

    public function home(Pegawai $pegawai){
        switch ($pegawai->id_divisi_pegawai){
            case '1':
                return redirect()->route('rekrutmen')->with('message','Selamat datang')->with('type','success');
            case '2':
                return redirect()->route('pelatihan')->with('message','Selamat datang')->with('type','success');
            case '3':
                return redirect()->route('penugasan')->with('message','Selamat datang')->with('type','success');
            default :
                return 'Wrong Pegawai';
        }

    }

    public function menuRekrutmen(){
        return view('menu_bagian_rekrutmen');
    }

    public function menuPelatihan(){
        return view('menu_bagian_pelatihan');
    }

    public function menuPenugasan(){
        return view('menu_bagian_penugasan');
    }
}
