<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index() {
        $toko = [
            'nama_toko' => 'Mamat Gun Shop',
            'alamat_toko' => 'Jl. Gunung Kidul No. 123',
            'type' => 'Ruko'
        ];

        // ELEQUENT ORM
        $product = Product::get(); // query untuk mengambil semua data yang ada di tb_product

        // QUERY BUILDER
        // $queryBuilder = DB::table('tb_product'); // query untuk mengambil semua data yang ada di tb_product

        // dd($elequent);
        return view('pages.product.show', [
            'data_toko' => $toko,
            'data_product' => $product,
        ]);
    }

    public function create() {
        return view('pages.product.add');
    }

    public function store(Request $request) {

        // validasi
        $request->validate([
            'product_name'=>'required|min:8|max:12',
            'price'=>'required',
            'description'=>'required',
        ], [
            'product_name.min'=>'Nama produk minimal 8 karakter',
            'product_name.max'=>'Nama produk maksimal 12 karakter',
            'product_name.required'=>'Inputan nama produk harus di isi',
            'price.required'=>'Inputan harga produk harus di isi',
            'description.required'=>'Inputan deskripsi produk harus di isi',
        ]);

        // untuk menambahkan data ke tb_product
        // DB::table('tb_product')->create([]);

        // query tambah data
        Product::create([
            'product_name'=>$request->product_name,
            'price'=>$request->price,
            'description'=>$request->description,
            'id_category'=>'1',
        ]);

        // mengarahkan ke halaman '/product'
        return redirect('/product')->with('message', 'Berhasil menambahkan data!');
    }
}

