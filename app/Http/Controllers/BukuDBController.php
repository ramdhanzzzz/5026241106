<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class bukuDBController extends Controller{
    public function index()
    {
        $buku = DB::table('buku')->get();

        return view('buku.index', ['buku' => $buku]);
    }
    public function cari(Request $request)
    {
        $cari = $request->cari;

        $buku = DB::table('buku')
            ->where('judul', 'like', '%' . $cari . '%')
            ->paginate();

        return view('buku.index', ['buku' => $buku]);
    }
    public function pinjam($ID)
    {
        $buku = DB::table('buku')->where('ID', $ID)->first();

        if ($buku) {
            DB::table('buku')->where('ID', $ID)->update(['sedang_dipinjam' => 1]);
            return redirect()->route('buku.index')->with('success', 'Buku berhasil dipinjam.');
        } else {
            return redirect()->route('buku.index')->with('error', 'Buku tidak ditemukan.');
        }
    }

}

