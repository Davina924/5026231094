<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\SnackController;
use App\Http\Controllers\Tugas1Controller;
use App\Http\Controllers\Tugas2Controller;
use App\Http\Controllers\Tugas3Controller;

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

Route::get('/snack', [SnackController::class, 'index']);
Route::get('/snack/tambah', [SnackController::class, 'tambah']);
Route::post('/snack/store', [SnackController::class, 'store']); //jika form dikirim, route ini akan dijalankan
Route::get('/snack/edit/{id}',[SnackController::class, 'edit']);
Route::post('/snack/update',[SnackController::class, 'update']);
Route::get('/snack/hapus/{id}', [SnackController::class, 'hapus']);

Route::get('/snack/cari', [SnackController::class, 'cari']);

Route::get('/latihan1', [Tugas1Controller::class, 'index']);

Route::get('/karyawanlat2', [Tugas2Controller::class, 'index']);
Route::get('/karyawanlat2/tambah', [Tugas2Controller::class, 'tambah']);
Route::post('/karyawanlat2/store', [Tugas2Controller::class, 'store']);
Route::post('/karyawanlat2/update',[Tugas2Controller::class, 'update']);
Route::get('/karyawanlat2/hapus/{id}', [Tugas2Controller::class, 'hapus']);

Route::get('/karyawanlat3', [Tugas3Controller::class, 'index']);
Route::get('/karyawanlat3/tambah', [Tugas3Controller::class, 'tambah']);
Route::post('/karyawanlat3/store', [Tugas3Controller::class, 'store']);
Route::post('/karyawanlat3/update',[Tugas3Controller::class, 'update']);
Route::get('/karyawanlat3/hapus/{id}', [Tugas3Controller::class, 'hapus']);
