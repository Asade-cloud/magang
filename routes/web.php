<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\HomeController;



// Route::get('/', function () {
//     return view('index');
// });

// Route::get('produk', ProdukController::class)->name('produk');
// Route::resource('produk', ProdukController::class)->name('produk');
Route::get('/', [HomeController::class, 'index'])->name('Home');
Route::get('/Produk', [ProdukController::class, 'index'])->name('Produk');
Route::get('/Produk/{id}', [ProdukController::class, 'Produk_detail'])->name('Produk_detail');
// Route::get('/Produk/Create', [ProdukController::class, 'create'])->name('Produk.Create');
Route::post('/Produk', [ProdukController::class, 'store'])->name('produk.store');
Route::get('/Service/broadcast', [ServiceController::class, 'broadcast'])->name('Service.broadcast');


