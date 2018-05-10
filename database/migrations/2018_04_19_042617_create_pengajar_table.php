<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengajarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

//      membuat skema table pengajar agar bisa dengan mudah membuat table pada setiap pc programmer
        Schema::create('pengajar', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_kelompok_pengajar')->default(0);
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->string('alamat');
            $table->string('agama');
            $table->string('no_hp');
            $table->string('email');
            $table->string('password');
            $table->string('jenjang_pendidikan_terakhir');
            $table->string('nama_institusi_pendidikan');
            $table->string('lokasi_penyimpanan_cv');
            $table->string('lokasi_penyimpanan_pas_foto');
            $table->integer('skor_tes_pengajar');
            $table->tinyInteger('status_kelulusan');
            $table->string('nomor_pendaftaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengajar');
    }
}
