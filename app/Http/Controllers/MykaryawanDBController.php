<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MykaryawanDBController extends Controller
{
    public function index (){
        $mykaryawan = DB::table('mykaryawan')->get();

        return view('mykaryawan.index', ['mykaryawan' => $mykaryawan]);
    }
    public function view ($kode_pegawai){
        $mykaryawan = DB::table('mykaryawan')->where('kode_pegawai', $kode_pegawai)->first();
             return view('mykaryawan.view', ['mykaryawan', $mykaryawan]);
    }
}
