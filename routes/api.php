<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProdukController;


    Route::get('produk', [ProdukController::class, 'index']); // Semua produk
    Route::post('produk/store', [ProdukController::class, 'store']); // Tambah produk
    Route::get('produk/show/{id}', [ProdukController::class, 'show']); // Detail produk
    Route::put('produk/update/{id}', [ProdukController::class, 'update']); // Update produk
    Route::delete('produk/destroy/{id}', [ProdukController::class, 'destroy']); // Hapus produk