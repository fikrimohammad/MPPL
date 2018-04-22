<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class Pegawai extends Authenticatable
{
    //
    use Notifiable;

    protected $table = 'pegawai';

    protected $fillable = ['nama','alamat','no_hp','email'];
    protected $hidden = ['password'];

    public function divisi(){
        return $this->belongsTo('App\Divisi','id_divisi_pegawai');
    }

}
