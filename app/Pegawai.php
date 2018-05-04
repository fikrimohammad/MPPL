<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class Pegawai extends Authenticatable
{
    //model untuk mengontrol data dari table pegawai
    //extends untuk membuat model ini bisa digunakan untuk authentikasi
    use Notifiable;

    protected $table = 'pegawai';

    protected $fillable = ['nama','alamat','no_hp','email'];
    protected $hidden = ['password'];

    public function divisi(){
//          memunculkan jadwal divisi yang sesuai dengan relasi pada model ini
        return $this->belongsTo('App\Divisi','id_divisi_pegawai');
    }

}
