@extends('layouts.master')

@section('konten')
    <h1>Detail Produk</h1>
    <hr>

    <div class="card">
        <div class="card-header">
            Detail Produk
        </div>
        <div class="card-body">
            <img src="https://placehold.co/600x400" class="img-fluid" alt="...">
            <p>Nama Produk: {{ $product->product_name }}</p>
            <p>Harga: Rp. {{ $product->price }}</p>
            <p>Deskripsi: {{ $product->description }}</p>
            <p>Kategori: {{ $product->id_category }}</p>
            <p>Stok: Tersedia 3</p>
            <a href="/product"><button type="button" class="btn btn-primary">Kembali</button></a>
        </div>
    </div>
@endsection
