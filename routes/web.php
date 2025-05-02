<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
// Route::get('/about/{id}/detail', function($id) {
//     return view('pages.detail', [
//         'nomor' => $id
//     ]);
// });

// get data product
Route::get('/product', [ProductController::class, 'index']); // read data product

// add and save data product
Route::get('/product/create', [ProductController::class, 'create']); // menampilkan halaman form add
Route::post('/product', [ProductController::class, 'store']); // untk mengelola data yg dikirim dari form add

// detail data product
Route::get('/product/{id}', [ProductController::class, 'show']); // untk menampilkan detail product

// edit and update data product
Route::get('/product/{id}/edit', [ProductController::class, 'edit']);
Route::put('/product/{id}', [ProductController::class, 'update']);
