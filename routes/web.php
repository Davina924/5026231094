<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
// import java.io ;
// Route adalah nama kelas
// System.out.println("Hello World");
Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
});

Route::get('blog', function () {
	return view('Intro');
});

Route::get('zindex', function () {
	return view('zindex');
});

Route::get('boxsizing', function () {
	return view('boxsizing');
});

Route::get('jsp', function () {
	return view('js1');
});

Route::get('linktreecf', function () {
	return view('coffeelinktree');
});

Route::get('linktreecf', function () {
	return view('coffeelinktree');
});

Route::get('validasi', function () {
	return view('validasi1');
});

Route::get('layout', function () {
	return view('LatihanLayout');
});

Route::get('layoutfinal', function () {
	return view('latihanlayoutfinal');
});

Route::get('index', function () {
	return view('index');
});

Route::get('frontend', function () {
	return view('frontend');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('welcome', [DosenController::class, 'welcome']);
//Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

// route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang',  [BlogController::class, 'tentang']);
Route::get('/blog/kontak',  [BlogController::class, 'kontak']);

Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']); //jika form dikirim, route ini akan dijalankan
Route::get('/pegawai/edit/{id}',[PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update',[PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);

Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

