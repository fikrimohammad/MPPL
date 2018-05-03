<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal_pelatihan extends Model
{
    //
    protected $table = 'jadwal_pelatihan';
    protected $fillable = [
        'nama', 'alamat_tempat', 'tgl_dan_waktu'
    ];

    public function materi(){
        return $this->hasMany('App\Materi_pelatihan','id_jadwal_pelatihan');
    }
}
