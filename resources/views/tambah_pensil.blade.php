@extends('template')
@section('judul_halaman', 'Data Pensil')
@section('konten')

    <h3>Data Pensil</h3>
    <br/>
    <a href="/pensil" class="btn btn-secondary mb-3">Kembali</a>

    <div class="card">
        <div class="card-header bg-light">
            Form Tambah Data Pensil
        </div>
        <div class="card-body">
            <form action="/pensil/store" method="POST">
                @csrf

                <div class="form-group row">
                    <label for="merkpensil" class="col-sm-2 col-form-label">Merek</label>
                    <div class="col-sm-10">
                        <input type="text" name="merkpensil" id="merkpensil" class="form-control" required="required" maxlength="30">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="stockpensil" class="col-sm-2 col-form-label">Stok</label>
                    <div class="col-sm-10">
                        <input type="number" name="stockpensil" id="stockpensil" class="form-control" required="required" min="0">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
                    <div class="col-sm-10">
                        <select name="tersedia" id="tersedia" class="form-control" required="required">
                            <option value="Y">Y (Tersedia)</option>
                            <option value="N">N (Habis)</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-2"></div> <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                    </div>
                </div>

            </form>
        </div>
    </div>

@endsection
