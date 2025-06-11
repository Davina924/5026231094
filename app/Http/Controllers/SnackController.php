<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SnackController extends Controller
{
    public function index()
    {
        // Mengambil data snack
        $snack = DB::table('snack')
            ->select('*',
                DB::raw("CONCAT('Rp', hargasnack) as hargasnack"),
                DB::raw("CONCAT(berat, ' gram') as berat"),
                DB::raw("CASE
                    WHEN tersedia = 0 THEN 'Tidak Tersedia'
                    ELSE 'Tersedia'
                END as status_tersedia"),
                DB::raw("CASE
                    WHEN tersedia = 0 THEN 'bg-danger'
                    ELSE 'bg-success'
                END as status_class")
            )
            ->paginate(10);

        // Menghitung total snack dan yang tersedia
        $totalSnacks = DB::table('snack')->count();
        $availableSnacks = DB::table('snack')->where('tersedia', 1)->count();

        return view('SnackIndex',[

            'snack' => $snack,
            'totalSnacks' => $totalSnacks,
            'availableSnacks' => $availableSnacks
        ]);
    }

    // method untuk menampilkan view form tambah snack
    public function tambah(){
        // memanggil view tambah
        return view('tambahSnack');
    }

    // method untuk insert data ke table snack
    public function store(Request $request)
    {
        // insert data ke table snack
	DB::table('snack')->insert([
		'merksnack' => $request->merksnack,
		'hargasnack' => $request->hargasnack,
		'tersedia' => $request->tersedia,
		'berat' => $request->berat
	]);
	// alihkan halaman ke halaman snack
	return redirect('/snack');
    }

    // method untuk edit data snack
    public function edit($id)
    {
	// mengambil data snack berdasarkan id yang dipilih
	$snack = DB::table('snack')
    ->where('id',$id) //khusus tanda =
    ->get();
	// passing data snack yang didapat ke view EditSnack.blade.php
	return view('EditSnack',['snack' => $snack]);
    }

    // update data snack
    public function update(Request $request)
    {
	// update data snack
	DB::table('snack')
    ->where('id',$request->id)
    ->update([
		'merksnack' => $request->merksnack,
		'hargasnack' => $request->hargasnack,
		'tersedia' => $request->tersedia,
		'berat' => $request->berat
	]);
	// alihkan halaman ke halaman snack
	return redirect('/snack')->with('success', 'Perubahan pada ' .$request->merksnack . ' telah disimpan.');
    }

    // method untuk hapus data snack
    public function hapus($id)
    {
	// menghapus data snack berdasarkan id yang dipilih
	DB::table('snack')->where('id',$id)->delete();

	// alihkan halaman ke halaman snack
	return redirect('/snack')->with('success', $merksnack . ' berhasil dihapus!');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
        $totalSnacks = DB::table('snack')->count();
        $availableSnacks = DB::table('snack')->where('tersedia', 1)->count();

    		// mengambil data dari table snack sesuai pencarian data
		$snack = DB::table('snack')
            ->select('*',
                DB::raw("CONCAT('Rp', hargasnack) as hargasnack"),
                DB::raw("CONCAT(berat, ' gram') as berat"),
                DB::raw("CASE
                    WHEN tersedia = 0 THEN 'Tidak Tersedia'
                    ELSE 'Tersedia'
                END as status_tersedia"),
                DB::raw("CASE
                    WHEN tersedia = 0 THEN 'bg-danger'
                    ELSE 'bg-success'
                END as status_class")
            )
		->where('merksnack', 'like', "%".$cari."%")
		->paginate();

    		// mengirim data snack ke view index
		return view('SnackIndex',[

            'snack' => $snack,
            'totalSnacks' => $totalSnacks,
            'availableSnacks' => $availableSnacks
        ]);

	}

}
