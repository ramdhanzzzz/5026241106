@extends('template')

@section('judul_halaman', 'Kode Soal mykaryawan')
@section('konten')

<p>INFO DATA KARYAWAN</p>

    <table class="table table-bordered table-striped table-hover">
        <thead class="thead-light">
            <tr>
                <th class="text-center">Kode Pegawai</th>
                <th class="text-center">Nama Lengkap</th>
                <th class="text-center">Divisi</th>
                <th class="text-center">Departemen</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-center align-middle">{{ $mykaryawan->kode_pegawai }}</td>
                <td class="text-center align-middle">{{ Str::title($mykaryawan->namalengkap) }}</td>
                <td class="text-center align-middle">{{ $mykaryawan->divisi }}</td>
                <td class="text-center align-middle">{{ $mykaryawan->departemen }}</td>
            </tr>
        </tbody>
    </table>
    <a href="/eas" class="btn btn-primary">Kembali</a>
@endsection
