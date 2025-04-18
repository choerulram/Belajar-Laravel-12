@extends('layouts.master')

@section('konten')
    <h1>Daftar Produk Kami</h1>
    <hr>
    <button type="button" class="btn btn-primary mb-3">Tambah Data</button>
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
                      <th scope="col">Stok</th>
                      <th scope="col">Harga</th>
                      <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Laptop Axio</td>
                      <td>25</td>
                      <td>Rp. 5.000.000</td>
                      <td>
                        <button type="button" class="btn btn-danger mb-3">Hapus</button>
                        <button type="button" class="btn btn-warning mb-3">Edit</button>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Laptop Acer</td>
                      <td>5</td>
                      <td>Rp. 6.000.000</td>
                      <td>
                        <button type="button" class="btn btn-danger mb-3">Hapus</button>
                        <button type="button" class="btn btn-warning mb-3">Edit</button>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Laptop Asus</td>
                      <td>15</td>
                      <td>Rp. 5.500.000</td>
                      <td>
                        <button type="button" class="btn btn-danger mb-3">Hapus</button>
                        <button type="button" class="btn btn-warning mb-3">Edit</button>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">4</th>
                      <td>Laptop HP</td>
                      <td>20</td>
                      <td>Rp. 7.000.000</td>
                      <td>
                        <button type="button" class="btn btn-danger mb-3">Hapus</button>
                        <button type="button" class="btn btn-warning mb-3">Edit</button>
                      </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection