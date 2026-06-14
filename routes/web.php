<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\PensilDBController;
use App\Http\Controllers\SiswaDBController;
use App\Http\Controllers\KeranjangbelanjaDBController;
use App\Http\Controllers\NilaiKuliahDBController;

// Route bawaan Laravel (halaman welcome)
Route::get('/', function () {
    return view('welcome');
});

// Route untuk halaman-halaman Anda
Route::get('/hmsi', function () {
    return view('contoh');
});

Route::get('/intro', function () {
    return view('intro');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/news1', function () {
    return view('news1');
});

Route::get('/landing', function () {
    return view('pertemuan4');
});

Route::get('/responsive', function () {
    return view('responsive');
});
// 1. Menampilkan halaman utama saat membuka http://127.0.0.1:8000/
Route::get('/', function () {
    return view('index');
});

// 2. Menampilkan halaman utama saat membuka http://127.0.0.1:8000/index
Route::get('/index', function () {
    return view('index');
});

// 3. Menampilkan halaman Pertemuan 5 (DELL)
// Bisa diakses melalui: http://127.0.0.1:8000/pertemuan5
Route::get('/pertemuan5', function () {
    return view('pertemuan5');
});

// 4. Menampilkan halaman Linktree
// Bisa diakses melalui: http://127.0.0.1:8000/linktree
Route::get('/linktree', function () {
    return view('linktree');
});
//5. Menampilkan halaman Makeover Instagram
// Bisa diakses melalui: http://127.0.0.1:8000/makeover-ig
Route::get('/makeover-ig', function () {
    return view('tugas_ets');
});

//route CRUD
Route::get('/pegawai',[PegawaiDBController::class, 'index2']);
Route::get('/pegawai/tambah',[PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store',[PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}',[PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update',[PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}',[PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari',[PegawaiDBController::class, 'cari']);

//crud pensil
Route::get('/pensil', [PensilDBController::class, 'index']);
Route::get('/pensil/tambah', [PensilDBController::class, 'tambah']);
Route::post('/pensil/store', [PensilDBController::class, 'store']);
Route::get('/pensil/edit/{id}', [PensilDBController::class, 'edit']);
Route::post('/pensil/update', [PensilDBController::class, 'update']);
Route::get('/pensil/hapus/{id}', [PensilDBController::class, 'hapus']);
Route::get('/pensil/cari', [PensilDBController::class, 'cari']);

//route CRUD siswa
Route::get('/siswa', [SiswaDBController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaDBController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaDBController::class, 'store'])->name('siswa.store');
route::get('/siswa/cari', [SiswaDBController::class, 'cari'])->name('siswa.cari');
Route::get('/siswa/{nrp}/edit', [SiswaDBController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaDBController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaDBController::class, 'destroy'])->name('siswa.destroy');


// CRUD Keranjang Belanja
Route::get('/keranjangbelanja', [KeranjangbelanjaDBController::class, 'index'])->name('keranjangbelanja.index');
Route::get('/keranjangbelanja/tambah', [KeranjangbelanjaDBController::class, 'tambah'])->name('keranjangbelanja.tambah');
Route::post('/keranjangbelanja/store', [KeranjangbelanjaDBController::class, 'store'])->name('keranjangbelanja.store');
Route::get('/keranjangbelanja/hapus/{id}', [KeranjangbelanjaDBController::class, 'hapus'])->name('keranjangbelanja.hapus');
Route::get('/keranjangbelanja/cari', [KeranjangbelanjaDBController::class, 'cari'])->name('keranjangbelanja.cari');

// CRUD Nilai Kuliah
Route::get('/nilaikuliah', [NilaiKuliahDBController::class, 'index'])->name('nilaikuliah.index');
Route::get('/nilaikuliah/tambah', [NilaiKuliahDBController::class, 'tambah'])->name('nilaikuliah.tambah');
Route::post('/nilaikuliah/store', [NilaiKuliahDBController::class, 'store'])->name('nilaikuliah.store');
route::get('/nilaikuliah/cari', [NilaiKuliahDBController::class, 'cari'])->name('nilaikuliah.cari');
