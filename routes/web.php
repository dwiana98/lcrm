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

// user router
Route::get('/', 'HomeController@beranda');
Route::get('/sejarah', 'HomeController@sejarah');
Route::get('/visi_misi', 'HomeController@visi_misi');
Route::get('/biaya_belajar', 'HomeController@biaya_belajar');
Route::get('/fasilitas', 'HomeController@fasilitas');
Route::get('/jadwal', 'HomeController@data_jadwal');
Route::get('/kontak', 'HomeController@kontak');
Route::get('/galeri', 'HomeController@galeri');
Route::get('/kuis', 'HomeController@kuis');
Route::get('/pendaftaran', 'HomeController@pendaftaran');
Route::post('/pendaftaran', 'HomeController@daftar');

// admin router
Route::get('/create/admin', 'AdminController@create');
Route::middleware(['guest'])->group(function() {
    Route::get('/login', 'AdminController@login')->name('login');
    Route::post('/login', 'AdminController@action_login');
});
Route::get('/archive/{slug}', 'HomeController@single');

Route::middleware('auth')->group( function() {
    route::get('/admin/dashboard', 'AdminController@dashboard');

    route::get('/admin/tambah_tutor', 'AdminController@tutor');
    route::post('/admin/tambah_tutor', 'AdminController@tambah_tutor');
    route::get('/admin/data_tutor', 'AdminController@data_tutor');
    Route::get('/admin/tutor/{id}/ubah', 'AdminController@ubah_tutor');
    Route::put('/admin/tutor/{id}/ubah', 'AdminController@update_tutor');
    Route::get('/admin/tutor/{id}/hapus', 'AdminController@hapus_tutor');

    Route::get('/admin/tambah_archive', 'AdminController@archive');
    Route::post('/admin/tambah_archive', 'AdminController@t_archive');
    Route::get('/admin/data_archive', 'AdminController@data_archive');
    Route::get('/admin/archive/{id}/ubah', 'AdminController@ubah_archive');
    Route::put('/admin/archive/{id}/ubah', 'AdminController@update_archive');
    Route::get('/admin/archive/{id}/hapus', 'AdminController@hapus_archive');

    Route::get('/admin/tambah_fasilitas', 'AdminController@t_fasilitas');
    Route::post('/admin/tambah_fasilitas', 'AdminController@fasilitas');
    Route::get('/admin/data_fasilitas', 'AdminController@data_fasilitas');
    Route::get('/admin/fasilitas/{id}/ubah', 'AdminController@ubah_fasilitas');
    Route::put('/admin/fasilitas/{id}/ubah', 'AdminController@update_fasilitas');
    Route::get('/admin/fasilitas/{id}/hapus', 'AdminController@hapus_fasilitas');

    Route::get('/admin/tambah_galeri', 'AdminController@t_galeri');
    Route::post('/admin/tambah_galeri', 'AdminController@simpan_galeri');
    Route::get('/admin/data_galeri', 'AdminController@data_galeri');
    Route::get('/admin/galeri/{id}/ubah', 'AdminController@ubah_galeri');
    Route::put('/admin/galeri/{id}/ubah', 'AdminController@updated_galeri');
    Route::get('/admin/galeri/{id}/hapus', 'AdminController@hapus_galeri');

    Route::get('/admin/tambah_biaya_belajar', 'AdminController@tambah_biaya');
    Route::post('/admin/tambah_biaya_belajar', 'AdminController@biaya');
    Route::get('/admin/data_biaya', 'AdminController@data_biaya');
    Route::get('/admin/biaya/{id}/ubah', 'AdminController@ubah_biaya');
    Route::put('/admin/biaya/{id}/ubah', 'AdminController@updated_biaya');
    Route::get('/admin/biaya/{id}/hapus', 'AdminController@hapus_biaya');

    Route::get('/admin/data_kuis', 'AdminController@data_kuis');
    Route::get('/admin/tambah_kuis', 'AdminController@tambah_kuis');
    Route::post('/admin/tambah_kuis', 'AdminController@simpan_kuis');
    Route::get('/admin/kuis/{id}/ubah', 'AdminController@ubah_kuis');
    Route::put('/admin/kuis/{id}/ubah', 'AdminController@updated_kuis');
    Route::get('/admin/kuis/{id}/hapus', 'AdminController@hapus_kuis')->where(['id' => '[0-9]+']);

    Route::get('/admin/data_jadwal', 'AdminController@data_jadwal');
    Route::get('/admin/tambah_jadwal', 'AdminController@tambah_jadwal');
    Route::post('/admin/tambah_jadwal', 'AdminController@simpan_jadwal');
    Route::get('/admin/jadwal/{id}/ubah', 'AdminController@ubah_jadwal');
    Route::put('/admin/jadwal/{id}/ubah', 'AdminController@updated_jadwal');
    Route::get('/admin/jadwal/{id}/hapus', 'AdminController@hapus_jadwal')->where(['id' => '[0-9]+']);

    Route::get('/admin/data_pendaftaran', 'AdminController@data_pendaftaran');
    Route::get('/admin/pendaftaran/{id}/ubah', 'AdminController@ubah_pendaftaran');
    Route::put('/admin/pendaftaran/{id}/ubah', 'AdminController@update_pendaftaran');
    Route::get('/admin/pendaftaran/{id}/hapus', 'AdminController@hapus_pendaftaran')->where(['id' => '[0-9]+']);

    Route::get('/admin/data_kontak', 'AdminController@data_kontak');
    Route::get('/admin/tambah_kontak', 'AdminController@tambah_kontak');
    Route::post('/admin/tambah_kontak', 'AdminController@simpan_kontak');
    Route::get('/admin/kontak/{id}/ubah', 'AdminController@ubah_kontak');
    Route::put('/admin/kontak/{id}/ubah', 'AdminController@update_kontak');
    Route::get('/admin/kontak/{id}/hapus', 'AdminController@hapus_kontak')->where(['id' => '[0-9]+']);
});

Route::get('/logout', function(){
    Auth::Logout(); return redirect('/login');
});
