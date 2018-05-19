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


Route::get('menu-bagian-pelatihan', function (){
   return view('menu_bagian_pelatihan');
});

Route::get('menu-bagian-penugasan', function (){
    return view('menu_bagian_penugasan');
});

Route::resource('manage/jadwal_pelatihan','JadwalPelatihanController');
Route::resource('manage/tempat_penugasan','TempatPenugasanController');
Route::resource('manage/kelompok_pengajar','KelompokPengajarController');
Route::resource('manage/materi_pelatihan','MateriPelatihanController');
Route::get('/ajax_kp1', 'KelompokPengajarController@select_pengajar_1');
Route::get('/ajax_kp2', 'KelompokPengajarController@select_pengajar_2');
