<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelompok_pengajar extends Model
{
    //model untuk mengontrol data dari table kelompok pengajar
    protected $table = "kelompok_pengajar";

    public function pengajar(){
//          memunculkan segala data dari table pengajar yang berelasi pada kelompok_pengajar
        return $this->hasMany('App\Pengajar','id_kelompok_pengajar');
    }
//          memunculkan tempat penugasan yang sesuai dengan relasi pada model ini
    public function penugasan(){
        return $this->belongsTo('App\Tempat_penugasan','id_tempat_penugasan');
    }

}
