<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tempat_penugasan extends Model
{
    //
    protected $table = 'tempat_penugasan';

    public function kelompok(){
        return $this->hasMany('App\Kelompok_pengajar','id_tempat_penugasan');
    }
}
