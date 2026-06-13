@extends('template')

@section('judul_halaman', 'Tambah Data Siswa')

@section('konten')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('siswa.store') }}" method="POST" onsubmit="return validasiForm()">
        @csrf

        <div class="form-group row">
            <label for="NRP" class="col-sm-2 col-form-label">NRP</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="NRP" id="NRP" maxlength="10" value="{{ old('NRP') }}" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Nama" id="Nama" maxlength="20" value="{{ old('Nama') }}" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="Kelas" class="col-sm-2 col-form-label">Kelas</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Kelas" id="Kelas" maxlength="5" value="{{ old('Kelas') }}" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="TanggalLahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="TanggalLahir" id="TanggalLahir" value="{{ old('TanggalLahir') }}" required>
            </div>
        </div>

        <div class="form-group row mt-4">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function validasiForm() {
            let nrp = document.getElementById('NRP').value.trim();
            let nama = document.getElementById('Nama').value.trim();
            let kelas = document.getElementById('Kelas').value.trim();
            let tanggal = document.getElementById('TanggalLahir').value;

            if (nrp === '') {
                Swal.fire({ title: "Kesalahan Input Data!", text: "NRP wajib diisi", icon: "error" });
                return false;
            }
            if (nrp.length > 10) {
                Swal.fire({ title: "Kesalahan Input Data!", text: "NRP maksimal 10 karakter", icon: "error" });
                return false;
            }
            if (nama === '') {
                Swal.fire({ title: "Kesalahan Input Data!", text: "Nama wajib diisi", icon: "error" });
                return false;
            }
            if (nama.length > 20) {
                Swal.fire({ title: "Kesalahan Input Data!", text: "Nama maksimal 20 karakter", icon: "error" });
                return false;
            }
            if (kelas === '') {
                Swal.fire({ title: "Kesalahan Input Data!", text: "Kelas wajib diisi", icon: "error" });
                return false;
            }
            if (kelas.length > 5) {
                Swal.fire({ title: "Kesalahan Input Data!", text: "Kelas maksimal 5 karakter", icon: "error" });
                return false;
            }
            if (tanggal === '') {
                Swal.fire({ title: "Kesalahan Input Data!", text: "Tanggal lahir wajib diisi", icon: "error" });
                return false;
            }
            return true;
        }
    </script>
@endsection
