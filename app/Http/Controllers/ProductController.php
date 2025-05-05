<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(Request $request) {
        $toko = [
            'nama_toko' => 'Mamat Gun Shop',
            'alamat_toko' => 'Jl. Gunung Kidul No. 123',
            'type' => 'Ruko'
        ];

        $search = $request->keyword;

        // ELEQUENT ORM
        $product = Product::when($search, function($query, $search){
            return $query->where('product_name', 'like', "%{$search}%")
            ->orWhere('description', 'like', "%{$search}%");
        })->get(); // query untuk mengambil semua data yang ada di tb_product

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

    public function show($id) {
        // query atau perintah
        // elequent ORM
        $data = Product::findOrFail($id);
        // dd($data);

        // query builder
        DB::table('tb_product')->where('id_product', $id)->firstOrFail();

        return view('pages.product.detail', [
            'product'=>$data
        ]);
    }

    public function edit($id) {
        // ambil data by id
        $data = Product::findOrFail($id);
        // dd($data);

        // DB::table('tb_product')->where('id_product', $id)->firstOrFail();

        return view('pages.product.edit', [
            'data'=>$data
        ]);
    }

    public function update($id, Request $request) {
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

        // query untk simpan data update
        Product::where('id_product', $id)->update([
            'product_name'=>$request->product_name,
            'price'=>$request->price,
            'description'=>$request->description,
            'id_category'=>'1',
        ]);

        return redirect('/product')->with('message', 'Data berhasil di edit!');
    }

    public function destroy($id) {
        // query untuk menghapus data di database
        Product::findOrFail($id)->delete();
        return redirect('/product')->with('message', 'Data berhasil di hapus!');
    }
}

