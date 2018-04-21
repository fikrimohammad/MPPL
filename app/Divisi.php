<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    //
    protected $table = 'divisi_pegawai';

    public function pegawai(){
        return $this->hasMany('App\Pegawai','id_divisi_pegawai');
    }
}
