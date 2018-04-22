<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal_pelatihan extends Model
{
    //
    protected $table = 'jadwal_pelatihan';

    public function materi(){
        return $this->hasMany('App\Materi_pelatihan','id_jadwal_pelatihan');
    }
}
