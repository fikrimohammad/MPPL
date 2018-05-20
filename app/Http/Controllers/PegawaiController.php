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
        $this->middleware('pegawai:3')->only('menuPenempatan');
    }

    public function home(Pegawai $pegawai){
        switch ($pegawai->id_divisi_pegawai){
            case '1':
                return redirect()->route('rekrutmen');
            case '2':
                return redirect()->route('pelatihan');
            case '3':
                return redirect()->route('penempatan');
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

    public function menuPenempatan(){
        return view('menu_bagian_penugasan');
    }
}
