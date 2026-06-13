@extends('template')

@section('judul_halaman', 'Data Siswa')

@section('konten')
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <a href="{{ route('siswa.create') }}" class="btn btn-primary mb-3">Tambah Siswa</a>

    <table class="table table-bordered table-striped table-hover">
        <thead class="thead-light">
            <tr>
                <th class="text-center">NRP</th>
                <th class="text-center">Nama</th>
                <th class="text-center">Kelas</th>
                <th class="text-center">Tanggal Lahir</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($siswa as $row)
                <tr>
                    <td class="text-center align-middle">{{ $row->NRP }}</td>
                    <td class="align-middle">{{ $row->Nama }}</td>
                    <td class="text-center align-middle">{{ $row->Kelas }}</td>
                    <td class="text-center align-middle">{{ $row->TanggalLahir }}</td>
                    <td class="text-center align-middle">
                        <a href="{{ route('siswa.edit', $row->NRP) }}" class="btn btn-warning btn-sm">Edit</a>

                        <form action="{{ route('siswa.destroy', $row->NRP) }}" method="POST" style="display:inline;"
                              onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center font-weight-bold">Belum ada data siswa.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
