@extends('template')

@section('judul_halaman', 'Data Buku')
@section('konten')
    <p></p>
    <P> Cari Data Buku :
    <form action="{{ route('buku.cari') }}" method="GET">
        <input type="text" name="cari" placeholder="Cari Judul Buku..." class="form-control">
        <input type="submit" value="CARI" class="btn btn-success">
        </p>
        <table class="table table-bordered table-striped table-hover mt-4">
            <thead class="thead-light">
                <tr>
                    <th class ="text-center">Judul</th>
                    <th class ="text-center">Penulis</th>
                    <th class ="text-center">Tahun Terbit</th>
                    <th class ="text-center">Kategori</th>
                    <th class ="text-center">Ketersediaan</th>
                    <th class ="text-center">Pinjam</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($buku as $bk)
                    <tr>
                        <td class="align-middle">{{ $bk->judul }}</td>
                        <td class="align-middle">{{ $bk->penulis }}</td>
                        <td class="text-center align-middle">{{ $bk->tahun }}</td>
                        <td class="text-center align-middle">
                            @if (date('Y') - $bk->tahun <= 5)
                                Baru
                            @elseif (date('Y') - $bk->tahun > 5)
                                Lama
                            @endif
                        </td>
                        <td class="text-center align-middle">
                            @if ($bk->sedang_dipinjam === 1)
                                Tidak Tersedia
                            @elseif ($bk->sedang_dipinjam === 0)
                                Tersedia
                            @endif
                        </td>
                        <td class="text-center align-middle">
                            @if ($bk->sedang_dipinjam == 0)
                                <a href="{{ route('buku.pinjam', $bk->ID) }}" class="btn btn-primary btn-sm">Pinjam</a>
                            @else
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endsection
