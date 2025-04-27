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

    public function tambahProduct() {
        return view('pages.addProduct');
    }
}
