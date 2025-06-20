<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EASController extends Controller
{
    public function index()
    {
        //ambil data dari table
        $mykaryawan = DB::table('mykaryawan')->get();
        // mengirim data ke view index
        return view('IndexEAS',['mykaryawan' => $mykaryawan]);
    }

    public function edit($kodepegawai)
    {
   // mengambil data pegawai berdasarkan id yang dipilih
	$mykaryawan = DB::table('mykaryawan')
    ->where('kodepegawai',$kodepegawai)
    ->get();
	// passing data pegawai yang didapat ke view edit
	return view('Editmykaryawan',['mykaryawan' => $mykaryawan]);
    }

    public function update(Request $request)
{
	// update data pegawai
	DB::table('mykaryawan')
    ->where('kodepegawai',$request->kodepegawai)
    ->update([
		'namalengkap' => $request->namalengkap,
		'divisi' => $request->divisi,
		'departemen' => $request->departemen,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/eas');
}

    public function view($kodepegawai)
    {
}
}
