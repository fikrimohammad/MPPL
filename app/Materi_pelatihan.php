<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materi_pelatihan extends Model
{
    //model ini mengontrol data dari table materi_pelatihan
    protected $table = 'materi_pelatihan';

    public function Jadwal(){
//          memunculkan jadwal pelatihani yang sesuai dengan relasi pada model ini
        return $this->belongsTo('App\Jadwal_pelatihan','id_jadwal_pelatihan');
    }
}
