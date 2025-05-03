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
        <div class="card-header d-flex justify-content-between align-items-center">
            Daftar Produk
            <div class="d-flex gap-2">
                @if (Request()->keyword != '')
                    <a href="/product" class="btn btn-info">Reset</a>
                @endif
                <form class="input-group" style="width: 350px">
                    <input type="text" class="form-control" value="{{ Request()->keyword }}" name="keyword" placeholder="Cari data produk...">
                    <button class="btn btn-success" type="subit" id="button-addon2">Cari Data</button>
                </form>
            </div>
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
                    @forelse ($data_product as $data)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $data->product_name }}</td>
                            <td>{{ $data->price }}</td>
                            <td>{{ $data->description }}</td>
                            <td>
                                <button type="button" class="btn btn-danger mb-3">Hapus</button>
                                <a href="/product/{{ $data->id_product }}/edit"><button
                                        class="btn btn-warning mb-3">Edit</button></a>
                                <a href="/product/{{ $data->id_product }}"><button
                                        class="btn btn-info mb-3">Detail</button></a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" style="color: red; text-align: center;">Data yang Anda cari tidak ada!!</td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
@endsection
