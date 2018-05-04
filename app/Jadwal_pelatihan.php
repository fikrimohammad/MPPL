<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal_pelatihan extends Model
{
    ////model untuk mengontrol data dari table divisi_pegawai
    protected $table = 'jadwal_pelatihan';
    protected $fillable = [
        'nama', 'alamat_tempat', 'tgl_dan_waktu'
    ];

    public function materi(){
        //          memunculkan segala data dari table materi_pelatihan yang berelasi pada jadwal_pelatihan
        return $this->hasMany('App\Materi_pelatihan','id_jadwal_pelatihan');
    }
}
