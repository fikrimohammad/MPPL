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
}
