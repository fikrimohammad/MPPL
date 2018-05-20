<?php

use Illuminate\Database\Seeder;

class PegawaiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('pegawai')->insert([
            'nama' => str_random(10),
            'email' => 'rekrutmen@gmail.com',
            'alamat' => 'Jalan-jalan',
            'no_hp' => '081112223334',
            'id_divisi_pegawai' => '1',
            'password' => bcrypt('rekrutmen'),
        ]);
        DB::table('pegawai')->insert([
            'nama' => str_random(10),
            'email' => 'penempatan@gmail.com',
            'alamat' => 'Jalan-jalan',
            'no_hp' => '081112223334',
            'id_divisi_pegawai' => '3',
            'password' => bcrypt('penempatan'),
        ]);
        DB::table('pegawai')->insert([
            'nama' => str_random(10),
            'email' => 'pelatihan@gmail.com',
            'alamat' => 'Jalan-jalan',
            'no_hp' => '081112223334',
            'id_divisi_pegawai' => '2',
            'password' => bcrypt('pelatihan'),
        ]);
    }
}
