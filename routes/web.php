<?php

use Illuminate\Support\Facades\Route;

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

route::view('/', 'landingPage');

route::get('/register', 'authController@register')->name('register');

route::get('/login', 'authController@login')->name('login');
route::post('/postlogin', 'authController@postlogin')->name('postlogin');
route::get('/logout', 'authController@logout')->name('logout');

// admin
route::group(['middleware' => ['auth:admin', 'ceklevel:admin']], function() {
    route::get('/dashboardAdmin', 'admin\dashboardController@index')->name('dashboardAdmin');
    route::get('/pengajuansuratAdmin', 'admin\pengajuanSuratController@index')->name('pengajuansuratAdmin');
    // suratkelahiran
    route::get('/pengajuansurat/suratkelahiranAdmin', 'admin\suratKelahiranController@create')->name('suratkelahiranAdmin');
    route::post('/pengajuansurat/suratkelahiran/post-suratAdmin', 'admin\suratKelahiranController@store')->name('post-suratkelahiran');
    // suratkematian
    route::get('/pengajuansurat/suratkematianAdmin', 'admin\suratKematianController@index')->name('suratkematian');
    route::post('/pengajuansurat/suratkematianAdmin', 'admin\suratKematianController@store')->name('post-suratkematian');
    // suratmasuk
    route::get('/suratmasuk', 'admin\suratMasukController@index')->name('suratmasuk');
    route::get('/suratmasuk/{id}/show', 'admin\suratMasukController@show')->name('show-suratmasuk');
    // suratkeluar
    route::get('suratkeluar', 'admin\suratKeluarController@index')->name('suratkeluar');
});

// pengguna
route::group(['middleware' => ['auth:user', 'ceklevel:pengguna']], function() {
    route::get('/dashboard', 'pengguna\dashboardController@index')->name('dashboardPengguna');
    route::get('/pengajuansurat', 'pengguna\pengajuanSuratController@index')->name('pengajuansuratPengguna');
    // suratmenikah
    route::get('/pengajuansurat/suratmenikah', 'pengguna\suratNikahController@create')->name('suratmenikahPengguna');
    route::post('/pengajuansurat/suratmenikah/post-surat', 'pengguna\suratNikahController@store')->name('post-suratmenikahPengguna');
    // suratkelahiran
    route::get('/pengajuansurat/suratkelahiran', 'pengguna\suratKelahiranController@create')->name('suratkelahiranPengguna');
    route::post('/pengajuansurat/suratkelahiran/post-surat', 'pengguna\suratKelahiranController@store')->name('post-suratkelahiranPengguna');
    // suratkematian
    route::get('/pengajuansurat/suratkematian', 'pengguna\suratKematianController@index')->name('suratkematianPengguna');
    route::post('/pengajuansurat/suratkematian', 'pengguna\suratKematianController@store')->name('post-suratkematianPengguna');
    // history
    route::get('/riwayatpengajuan', 'pengguna\riwayatPengajuanController@index')->name('riwayatpengajuan');
});


