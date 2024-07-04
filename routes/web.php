<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProdukdetailController;


Route::get('/', function () {
    return view('index');
});

// Route::get('produk', ProdukController::class)->name('produk');
// Route::resource('produk', ProdukController::class)->name('produk');
Route::get('/Produk', [ProdukController::class, 'index'])->name('Produk');
Route::get('/Produk/{id}', [ProdukController::class, 'Produk_detail'])->name('Produk.detail');

