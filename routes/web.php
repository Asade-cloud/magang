<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;



Route::get('/', function () {
    return view('index');
});

Route::get('produk', ProdukController::class)->name('produk');
// Route::resource('produk', ProdukController::class)->name('produk');
