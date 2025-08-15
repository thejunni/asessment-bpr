<?php

use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;


Route::resource('produk', ProdukController::class);
Route::resource('kategori-produk', KategoriProdukController::class);