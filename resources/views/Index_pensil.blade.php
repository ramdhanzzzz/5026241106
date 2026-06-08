@extends('template')
@section('judul_halaman', 'Data Pensil')
@section('konten')

    <p> </p>
    <a href="/pensil/tambah" class="btn btn-primary">Tambah Pensil Baru</a>

    <p> </p>
    <p>Cari Data Pensil :</p>
    <form action="/pensil/cari" method="GET" class="form-inline">
        <input type="text" name="cari" placeholder="Cari merek pensil .." class="form-control mr-2" value="{{ request()->get('cari') }}">
        <input type="submit" value="CARI" class="btn btn-success">
    </form>

    <br/>

    <table class="table table-striped table-hover">
        <tr>
            <th>Merek Pensil</th>
            <th>Stok</th>
            <th>Tersedia</th>
            <th>Opsi</th>
        </tr>
        @foreach($pensil as $p)
        <tr>
            <td>{{ $p->merkpensil }}</td>
            <td>{{ $p->stockpensil }}</td>
            <td>
                <span class="badge {{ $p->tersedia == 'Y' ? 'badge-success' : 'badge-danger' }}">
                    {{ $p->tersedia }}
                </span>
            </td>
            <td>
                <a href="/pensil/edit/{{ $p->kodepensil }}" class="btn btn-warning btn-sm">Edit</a>
                |
                <a href="/pensil/hapus/{{ $p->kodepensil }}" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>

    {{ $pensil->links() }}

@endsection
