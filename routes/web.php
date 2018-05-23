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
Route::get('/pengajar','MenuPengajar@index');
Route::prefix('pengajar')->group(function (){
    Route::get('materi_pelatihan','PengajarController@materi_pelatihan');
    Route::get('materi_pelatihan/{id}/download','MateriPelatihanController@download_materi');
    Route::get('jadwal_pelatihan','JadwalPelatihanController@index');
    Route::get('hasil_seleksi/{pengajar}','PengajarController@viewSeleksi');
    Route::get('kelompok_pengajar/{pengajar}/','PengajarController@kelompok');
    Route::get('kelompok_pengajar/{pengajar}/penugasan','PengajarController@tempatPenugasan');

    $this->get('login', 'AuthPengajar\LoginController@showLoginForm')->name('loginPengajar');
    $this->post('login', 'AuthPengajar\LoginController@login');
    $this->get('logout', 'AuthPengajar\LoginController@logout')->name('logoutPengajar');
    Route::get('register','AuthPengajar\RegisterController@showRegistrationForm')->name('registerPengajar');
    Route::post('register','AuthPengajar\RegisterController@register')->name('registerPengajar');
});



Route::resource('manage/jadwal_pelatihan','JadwalPelatihanController');
Route::resource('manage/materi_pelatihan','MateriPelatihanController');
Route::get('/ajax_kp1', 'KelompokPengajarController@select_pengajar_1');
Route::get('/ajax_kp2', 'KelompokPengajarController@select_pengajar_2');

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Auth pengajar


// Registration Routes...

// Password Reset Routes...
$this->get('password/reset', 'AuthPengajar\ForgotPasswordController@showLinkRequestForm');
$this->post('password/email', 'AuthPengajar\ForgotPasswordController@sendResetLinkEmail');
$this->get('password/reset/{token}', 'AuthPengajar\ResetPasswordController@showResetForm');
$this->post('password/reset', 'AuthPengajar\ResetPasswordController@reset');

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('pegawai')->group(function (){
    //Auth Pegawai
    Route::get('login', 'AuthPegawai\LoginControllerPegawai@showLoginForm')->name('login');
    Route::post('login', 'AuthPegawai\LoginControllerPegawai@login');
    Route::get('logout', 'AuthPegawai\LoginControllerPegawai@logout')->name('logout');

// Password Reset Routes...
    Route::get('password/reset', 'AuthPengajar\ForgotPasswordControllerPegawai@showLinkRequestForm');
    Route::post('password/email', 'AuthPengajar\ForgotPasswordControllerPegawai@sendResetLinkEmail');
    Route::get('password/reset/{token}', 'AuthPengajar\ResetPasswordControllerPegawai@showResetForm');
    Route::post('password/reset', 'AuthPengajar\ResetPasswordControllerPegawai@reset');

//menu redirect pegawai
    Route::get('rekrutmen','PegawaiController@menuRekrutmen')->name('rekrutmen');
    Route::get('pelatihan','PegawaiController@menuPelatihan')->name('pelatihan');
    Route::get('penugasan','PegawaiController@menuPenempatan')->name('penempatan');

    Route::get('home/{pegawai}','PegawaiController@home');

    Route::resource('materi_pelatihan','MateriPelatihanController');
    Route::resource('kelompok_pengajar','KelompokPengajarController');
    Route::resource('tempat_penugasan','TempatPenugasanController');
    Route::resource('pengajar','PengajarController')->except([
        'create', 'store'
    ]);

});