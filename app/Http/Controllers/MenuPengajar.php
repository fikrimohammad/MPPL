<?php

namespace App\Http\Controllers;
use App\Jadwal_pelatihan;
use Illuminate\Http\Request;

class MenuPengajar extends Controller
{
    //
    public function index(){
        return view('menu_pengajar');
    }
    public function jadwal(){
        $jadwal = Jadwal_pelatihan::all();
        return view('pengajar.jadwal_pelatihan')->with('jadwal',$jadwal);
    }
}
