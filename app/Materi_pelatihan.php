<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materi_pelatihan extends Model
{
    //
    protected $table = 'materi_pelatihan';

    public function Jadwal(){
        return $this->belongsTo('App\Jadwal_pelatihan','id_jadwal_pelatihan');
    }
}
