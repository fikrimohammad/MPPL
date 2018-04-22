<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKelompokPengajarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//      membuat skema table kelompok_pengajar agar bisa dengan mudah membuat table pada setiap pc programmer
        Schema::create('kelompok_pengajar', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_tempat_penugasan');
            $table->string('nama');
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
        Schema::dropIfExists('kelompok_pengajar');
    }
}
