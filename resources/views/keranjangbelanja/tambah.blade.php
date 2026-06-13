@extends('template')

@section('judul_halaman', 'Tambah Data Pembelian')

@section('konten')
    <form action="/keranjangbelanja/store" method="post">
        {{ csrf_field() }}

        <div class="form-group row">
            <label for="KodeBarang" class="col-sm-2 col-form-label">Kode Barang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="KodeBarang" name="KodeBarang" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="Jumlah" class="col-sm-2 col-form-label">Jumlah Pembelian</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="Jumlah" name="Jumlah" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="Harga" class="col-sm-2 col-form-label">Harga per item</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="Harga" name="Harga" required>
            </div>
        </div>

        <div class="form-group row mt-4">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-success">Simpan Record</button>
                <a href="/keranjangbelanja" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </form>
@endsection
