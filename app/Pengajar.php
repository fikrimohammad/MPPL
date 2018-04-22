<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pengajar extends Authenticatable
{
    //model untuk mengontrol data dari table pengajar
    //extends untuk membuat model ini bisa digunakan untuk authentikasi
    use Notifiable;

    protected $table = 'pengajar';

    protected $fillable = ['email',  'password', 'nama', 'tempat_lahir','tgl_lahir','alamat','agama','no_hp','email','jenjang_pendidikan_terakhir','nama_institusi_pendidikan'
    ,'lokasi_penyimpanan_cv','lokasi_penyimpanan_pas_foto','skor_tes_pengajar','status_kelulusan','nomor_pendaftaran'];

    protected $hidden = ['password'];

    public function kelompok(){
//          memunculkan jadwal pelatihani yang sesuai dengan relasi pada model ini
        return $this->belongsTo('App\Kelompok_pengajar','id_kelompok_pengajar');
    }
}
