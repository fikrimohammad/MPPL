<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tempat_penugasan extends Model
{
    //
    protected $table = 'tempat_penugasan';

    public function kelompok(){
        //          memunculkan segala data dari table kelompok pegawai yang berelasi pada tempat_penugasan
        return $this->hasMany('App\Kelompok_pengajar','id_tempat_penugasan');
    }
}
