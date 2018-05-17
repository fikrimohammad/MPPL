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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Auth pengajar
$this->get('login', 'AuthPengajar\LoginController@showLoginForm')->name('login');
$this->post('login', 'AuthPengajar\LoginController@login');
$this->post('logout', 'AuthPengajar\LoginController@logout')->name('logout');

// Registration Routes...

// Password Reset Routes...
$this->get('password/reset', 'AuthPengajar\ForgotPasswordController@showLinkRequestForm');
$this->post('password/email', 'AuthPengajar\ForgotPasswordController@sendResetLinkEmail');
$this->get('password/reset/{token}', 'AuthPengajar\ResetPasswordController@showResetForm');
$this->post('password/reset', 'AuthPengajar\ResetPasswordController@reset');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
