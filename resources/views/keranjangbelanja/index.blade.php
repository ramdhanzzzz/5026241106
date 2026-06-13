@extends('template')

@section('judul_halaman', 'Data Keranjang Belanja')

@section('konten')
    <table class="table table-bordered table-striped table-hover mt-4">
        <thead class="thead-light">
            <tr>
                <th class="text-center">Kode Pembelian</th>
                <th class="text-center">Kode Barang</th>
                <th class="text-center">Jumlah Pembelian</th>
                <th class="text-center">Harga per item</th>
                <th class="text-center">Total</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($keranjangbelanja as $kb)
            <tr>
                <td class="text-center align-middle">{{ $kb->ID }}</td>
                <td class="text-center align-middle">{{ $kb->KodeBarang }}</td>
                <td class="text-center align-middle">{{ $kb->Jumlah }}</td>
                <td class="align-middle">Rp {{ number_format($kb->Harga, 0, ',', '.') }}</td>
                <td class="align-middle">Rp {{ number_format($kb->Jumlah * $kb->Harga, 0, ',', '.') }}</td>

                <td class="text-center align-middle">
                    <a href="{{ route('keranjangbelanja.tambah') }}" class="btn btn-primary btn-sm">Beli</a>

                    <a href="{{ route('keranjangbelanja.hapus', $kb->ID) }}" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin membatalkan pesanan ini?')">Batal</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
