<?php

use Illuminate\Support\Facades\Route;
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
	return view('blog');
});

Route::get('js', function () {
	return view('js1');
});

