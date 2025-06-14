<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Tugas2Controller extends Controller
{
    public function index()
    {
    	// mengambil data dari table karyawan
    	$karyawan = DB::table('karyawan')->get(); //all records in array

    	// mengirim data karyawan ke view index
    	return view('IndexTugas2',['karyawan' => $karyawan]);
    }

// method untuk menampilkan view form tambah karyawan
    public function tambah(){
        // memanggil view tambah
        return view('tambahTugas2');
    }

    // method untuk insert data ke table karyawan
public function store(Request $request)
{
	// insert data ke table karyawan
	DB::table('karyawan')->insert([
		'kodepegawai' => $request->kodepegawai,
		'namalengkap' => $request->namalengkap,
		'divisi' => $request->divisi,
		'departemen' => $request->departemen
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/karyawanlat2');

}

// update data karyawan
public function update(Request $request)
{
	// update data karyawan
	DB::table('karyawan')
    ->where('kodepegawai',$request->kodepegawai)
    ->update([
		'kodepegawai' => $request->kodepegawai,
		'namalengkap' => $request->namalengkap,
		'divisi' => $request->divisi,
		'departemen' => $request->departemen
	]);
	// alihkan halaman ke halaman karyawan
	return redirect('/karyawanlat2');
}

// method untuk hapus data karyawan
public function hapus($kodepegawai)
{
	// menghapus data karyawan berdasarkan id yang dipilih
	DB::table('karyawan')
    ->where('kodepegawai',$kodepegawai)
    ->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/karyawanlat2');
}

}
