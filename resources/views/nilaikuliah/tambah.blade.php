@extends('template')

@section('judul_halaman', 'Tambah Data Nilai Kuliah')

@section('konten')
    <form action="/nilaikuliah/store" method="post">
        {{ csrf_field() }}

        <div class="form-group row">
            <label for="NRP" class="col-sm-2 col-form-label">NRP</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="NRP" name="NRP" maxlength="6" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="NilaiAngka" class="col-sm-2 col-form-label">Nilai Angka</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="NilaiAngka" name="NilaiAngka" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="SKS" class="col-sm-2 col-form-label">SKS</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="SKS" name="SKS" required>
            </div>
        </div>

        <div class="form-group row mt-4">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-success">Simpan Record</button>
                <a href="/nilaikuliah" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </form>
@endsection
