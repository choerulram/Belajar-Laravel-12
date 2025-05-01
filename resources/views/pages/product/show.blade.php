@extends('layouts.master')

@section('konten')
    <h1>Daftar Produk Kami</h1>
    <hr>

    {{-- ambil data dari ProductController --}}
    <div class="alert alert-dark">
        <h3>Produk Terbaru</h3>
        <b>Nama Toko : {{ $data_toko['nama_toko'] }}</b>
        <br>
        <b>Alamat Toko : {{ $data_toko['alamat_toko'] }}</b>
        <br>
        <b>Type Toko : {{ $data_toko['type'] }}</b>
    </div>

    @if (session('message'))
    <div class="alert alert-success">{{ session('message') }}</div>
    @endif
    <a href="/product/create"><button type="button" class="btn btn-primary mb-3">Tambah Data</button></a>

    <div class="card">
        <div class="card-header">
            Daftar Produk
        </div>
        <div class="card-body">
            <table class="table table-striped-columns table-bordered">
                <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama Produk</th>
                      <th scope="col">Harga</th>
                      <th scope="col">Deskripsi Produk</th>
                      <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_product as $data)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $data->product_name }}</td>
                            <td>{{ $data->price }}</td>
                            <td>{{ $data->description }}</td>
                            <td>
                            <button type="button" class="btn btn-danger mb-3">Hapus</button>
                            <button type="button" class="btn btn-warning mb-3">Edit</button>
                            <a href="/product/{{ $data->id_product }}"><button type="button" class="btn btn-info mb-3">Detail</button></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
