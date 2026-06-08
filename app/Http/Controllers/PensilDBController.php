<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PensilDBController extends Controller
{
    public function index()
    {
        // Mengambil data dari table pensil dengan paginasi
        $pensil = DB::table('pensil')->paginate(10);

        // Mengirim data pensil ke view index_pensil.blade.php
        return view('index_pensil', ['pensil' => $pensil]);
    }

    public function tambah()
    {
        // Memanggil view tambah_pensil.blade.php
        return view('tambah_pensil');
    }

    // Method untuk insert data ke table pensil
    public function store(Request $request)
    {
        // Insert data ke table pensil
        DB::table('pensil')->insert([
            'merkpensil'  => $request->merkpensil,
            'stockpensil' => $request->stockpensil,
            'tersedia'    => $request->tersedia
        ]);

        // Alihkan halaman kembali ke index pensil
        return redirect('/pensil');
    }

    // Method untuk edit data pensil
    public function edit($id)
    {
        // Mengambil data pensil berdasarkan kodepensil yang dipilih
        $pensil = DB::table('pensil')->where('kodepensil', $id)->get();

        // Passing data pensil yang didapat ke view edit_pensil.blade.php
        return view('edit_pensil', ['pensil' => $pensil]);
    }

    // Update data pensil
    public function update(Request $request)
    {
        // Update data pensil berdasarkan kodepensil (dikirim dari input hidden di form)
        DB::table('pensil')->where('kodepensil', $request->kodepensil)->update([
            'merkpensil'  => $request->merkpensil,
            'stockpensil' => $request->stockpensil,
            'tersedia'    => $request->tersedia
        ]);

        // Alihkan halaman kembali ke index pensil
        return redirect('/pensil');
    }

    // Method untuk hapus data pensil
    public function hapus($id)
    {
        // Menghapus data pensil berdasarkan kodepensil yang dipilih
        DB::table('pensil')->where('kodepensil', $id)->delete();

        // Alihkan halaman kembali ke index pensil
        return redirect('/pensil');
    }

    // Method untuk fitur pencarian
    public function cari(Request $request)
    {
        // Menangkap data pencarian
        $cari = $request->cari;

        // Mengambil data dari table pensil sesuai pencarian pada kolom 'merkpensil'
        $pensil = DB::table('pensil')
            ->where('merkpensil', 'like', "%" . $cari . "%")
            ->paginate(10); // Tetap menggunakan paginate agar hasil pencarian rapi

        // Mengirim data hasil pencarian ke view index_pensil.blade.php
        return view('index_pensil', ['pensil' => $pensil]);
    }
}
