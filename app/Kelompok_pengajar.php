<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelompok_pengajar extends Model
{
    //
    protected $table = "kelompok_pengajar";

    public function pengajar(){
        return $this->hasMany('App\Pengajar','id_kelompok_pengajar');
    }

    public function penugasan(){
        return $this->belongsTo('App\Tempat_penugasan','id_tempat_penugasan');
    }

}
