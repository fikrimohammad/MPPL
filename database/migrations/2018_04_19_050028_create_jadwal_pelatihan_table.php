<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJadwalPelatihanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//      membuat skema table jadwal_pelatihan agar bisa dengan mudah membuat table pada setiap pc programmer
        Schema::create('jadwal_pelatihan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('alamat_tempat');
            $table->timestamp('tgl_dan_waktu');
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
        Schema::dropIfExists('jadwal_pelatihan');
    }
}
