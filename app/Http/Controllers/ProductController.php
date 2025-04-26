<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $data_toko = [
            'nama_toko' => 'Mamat Gun Shop',
            'alamat_toko' => 'Jl. Gunung Kidul No. 123',
            'type' => 'Ruko'
        ];
        return view('pages.product.show', $data_toko);
    }

    public function tambahProduct() {
        return view('pages.addProduct');
    }
}
