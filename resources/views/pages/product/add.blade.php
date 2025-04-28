@extends('layouts.master')

@section('konten')
    <div class="card">
        <div class="card-header">
            Tambah Data Produk
        </div>
        <div class="card-body">
            <form action="/product" method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">Nama Produk</label>
                            <input type="text" name="product_name" class="form-control" value="{{ old('product_name') }}">
                            @error('product_name')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">Harga</label>
                            <input type="number" name="price" class="form-control" value="{{ old('price') }}">
                            @error('price')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Deskripsi Produk</label>
                        <div class="form-floating">
                            <textarea class="form-control" name="description" placeholder="TES" style="height: 100px" value="{{ old('description') }}"></textarea>
                            <label >Deskripsi Produk</label>
                            @error('description')
                            <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-12 mt-3">
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
