<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/produk', function () {
    return view('produk');
})->name('produk');

Route::get('/transaksi', function () {
    return view('transaksi');
})->name('transaksi');

Route::get('/stok', function () {
    return view('stok');
})->name('stok');

Route::get('/laporan', function () {
    return view('laporan');
})->name('laporan');