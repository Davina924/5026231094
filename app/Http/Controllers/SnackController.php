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
        // mengambil data snack yang akan dihapus
        $snack = DB::table('snack')->where('id', $id)->first();
        $merksnack = $snack->merksnack;  // simpan nama snack sebelum dihapus

        // menghapus data snack berdasarkan id yang dipilih
        DB::table('snack')->where('id', $id)->delete();

        // alihkan halaman ke halaman snack
        return redirect('/snack')->with('success', $merksnack . ' berhasil dihapus!');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
        $sort = $request->sort;

        $query = DB::table('snack')
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
            );

    // Filter pencarian
    if ($cari) {
        $query->where('merksnack', 'like', "%".$cari."%");
    }

    // Pengurutan
    switch ($sort) {
        case 'name_asc':
            $query->orderBy('merksnack', 'asc');
            break;
        case 'name_desc':
            $query->orderBy('merksnack', 'desc');
            break;
        case 'price_asc':
            $query->orderByRaw('CAST(hargasnack AS DECIMAL(10,2)) asc');
            break;
        case 'price_desc':
            $query->orderByRaw('CAST(hargasnack AS DECIMAL(10,2)) desc');
            break;
        default:
            $query->orderBy('merksnack', 'asc'); // default sorting
    }

    $snack = $query->paginate(10)->withQueryString();
    $totalSnacks = DB::table('snack')->count();
    $availableSnacks = DB::table('snack')->where('tersedia', 1)->count();

    return view('SnackIndex', [
        'snack' => $snack,
        'totalSnacks' => $totalSnacks,
        'availableSnacks' => $availableSnacks
    ]);
}
}
