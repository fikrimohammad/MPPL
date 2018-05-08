<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('pengajar/materi_pelatihan','PengajarController@materi_pelatihan');
Route::get('pengajar/materi_pelatihan/{id}/download','MateriPelatihanController@download_materi');
Route::resource('pengajar','PengajarController');

Route::resource('jadwal_pelatihan','JadwalPelatihanController');
Route::resource('manage/materi_pelatihan','MateriPelatihanController');
