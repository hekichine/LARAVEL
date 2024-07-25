<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/products',[\App\Http\Controllers\ProductController::class,'index'])->name('products.index');
Route::get('/products/create',[\App\Http\Controllers\ProductController::class,'create'])->name('products.create');
Route::post('/products/create',[\App\Http\Controllers\ProductController::class,'store'])->name('products.store');
