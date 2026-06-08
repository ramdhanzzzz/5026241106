@extends('template')
@section('judul_halaman', 'Edit Pensil')
@section('konten')

    <h3>Edit Pensil</h3>
    <br/>
    <a href="/pensil" class="btn btn-secondary mb-3">Kembali</a>

    <div class="card">
        <div class="card-header bg-light">
            Form Edit Data Pensil
        </div>
        <div class="card-body">
            @foreach($pensil as $p)
            <form action="/pensil/update" method="POST">
                @csrf
                <input type="hidden" name="kodepensil" value="{{ $p->kodepensil }}">

                <div class="form-group row">
                    <label for="merkpensil" class="col-sm-2 col-form-label">Merek</label>
                    <div class="col-sm-10">
                        <input type="text" name="merkpensil" id="merkpensil" class="form-control" required="required" maxlength="30" value="{{ $p->merkpensil }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="stockpensil" class="col-sm-2 col-form-label">Stok</label>
                    <div class="col-sm-10">
                        <input type="number" name="stockpensil" id="stockpensil" class="form-control" required="required" min="0" value="{{ $p->stockpensil }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
                    <div class="col-sm-10">
                        <select name="tersedia" id="tersedia" class="form-control" required="required">
                            <option value="Y" {{ $p->tersedia == 'Y' ? 'selected' : '' }}>Y (Tersedia)</option>
                            <option value="N" {{ $p->tersedia == 'N' ? 'selected' : '' }}>N (Habis)</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-2"></div> <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                    </div>
                </div>

            </form>
            @endforeach
        </div>
    </div>

@endsection
