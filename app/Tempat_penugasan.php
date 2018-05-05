<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tempat_penugasan extends Model
{
    //
    protected $table = 'tempat_penugasan';
    protected $fillable = [
        'nama', 'alamat', 'nama_contact_person', 'no_hp_contact_person'
    ];

    public function kelompok(){
        //          memunculkan segala data dari table kelompok pegawai yang berelasi pada tempat_penugasan
        return $this->hasMany('App\Kelompok_pengajar','id_tempat_penugasan');
    }
}
