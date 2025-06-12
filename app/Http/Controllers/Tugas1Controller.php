<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Tugas1Controller extends Controller
{
    public function index()
    {
        // Mengambil data counter dari database
        $counter = DB::table('pagecounter')->first();
            $hitungPengunjung = $counter->jumlah + 1;
            DB::table('pagecounter')
                ->where('id', $counter->id)
                ->update(['jumlah' => $hitungPengunjung]);
        return view('IndexTugas1', ['hitungPengunjung' => $hitungPengunjung]);
    }
}
