<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.beranda');
});
Route::get('/about', function() {
    $biodata = [
        'nama' => 'Achmad Choerul',
        'umur' => '20',
        'alamat' => 'Cilacap'
    ];
    return view('pages.about', $biodata);
});

// menggunakan route view
Route::view('/contact', 'pages.contact');
Route::get('/about/{id}/detail', function($id) {
    return view('pages.detail', [
        'nomor' => $id
    ]);
});
