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
