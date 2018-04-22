<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    //model untuk mengontrol data dari table divisi_pegawai
    protected $table = 'divisi_pegawai';

    public function pegawai(){
//          memunculkan segala data dari table pegawai yang berelasi pada divisi_pegwai
        return $this->hasMany('App\Pegawai','id_divisi_pegawai');
    }
}
