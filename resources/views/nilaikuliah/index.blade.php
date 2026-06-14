@extends('template')

@section('judul_halaman', 'Data Nilai Kuliah')

@section('konten')
<p></p>
<p> Cari Data Nilai Kuliah :
    <form action="{{ route('nilaikuliah.cari') }}" method="GET">
    <input type="text" name="cari" placeholder="Cari NRP..." class="form-control">
    <input type="submit" value="CARI" class="btn btn-success">
</form>
</p>
    <a href="/nilaikuliah/tambah" class="btn btn-primary mb-3">Tambah Data</a>

    <table class="table table-bordered table-striped table-hover">
        <thead class="thead-light">
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">NRP</th>
                <th class="text-center">Nilai Angka</th>
                <th class="text-center">SKS</th>
                <th class="text-center">Nilai Huruf</th>
                <th class="text-center">Bobot</th>
            </tr>
        </thead>
        <tbody>
            @foreach($nilaikuliah as $nk)
            <tr>
                <td class="text-center align-middle">{{ $nk->ID }}</td>
                <td class="text-center align-middle">{{ $nk->NRP }}</td>
                <td class="text-center align-middle">{{ $nk->NilaiAngka }}</td>
                <td class="text-center align-middle">{{ $nk->SKS }}</td>

                <td class="text-center align-middle">
                    @if($nk->NilaiAngka <= 40)
                        D
                    @elseif($nk->NilaiAngka >= 41 && $nk->NilaiAngka <= 60)
                        C
                    @elseif($nk->NilaiAngka >= 61 && $nk->NilaiAngka <= 80)
                        B
                    @else
                        A
                    @endif
                </td>

                <td class="text-center align-middle">
                    {{ $nk->NilaiAngka * $nk->SKS }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
