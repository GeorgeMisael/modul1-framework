<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('layouts.main');
});

Route::get('/kategori',[CategoryController::class, 'index'])->name('kategori');
Route::post('/kategori', [CategoryController::class, 'store'])->name('kategori');

Route::get('/buku', [BookController::class, 'index'])->name('buku.index');
Route::post('/buku', [BookController::class, 'store'])->name('buku.store');
Route::delete('/buku/{id_book}', [BookController::class, 'destroy'])->name('buku.destroy');