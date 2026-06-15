@extends('template')

@section('judul_halaman', 'Kode Soal mykaryawan')
@section('konten')

<table class="table table-bordered table-striped table-hover">
    <thead class="thead-light">
        <tr>
            <th class="text-center">Kode Pegawai</th>
            <th class="text-center">Nama Lengkap</th>
            <th class="text-center">Divisi</th>
            <th class="text-center">Departemen</th>
            <th class="text-center">View</th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $mykaryawan as $mk )
        <tr>
            <td class="text-center align-middle">{{$mk -> kode_pegawai}}</td>
            <td class="text-center align-middle">{{ Str::title($mk->namalengkap) }}</td>
            <td class="text-center align-middle">{{$mk -> divisi}}</td>
            <td class="text-center align-middle">{{$mk -> departemen}}</td>
            <td class="text-center align-middle">
                <a href="{{ route('mykaryawan.view', $mk -> kode_pegawai) }}" class="btn btn-warning btn-sm">View</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
