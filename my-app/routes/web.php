<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

Route::get('customers', [CustomerController::class, 'index']);

use App\Http\Controllers\ProductController;
Route::get('/products', [ProductController::class, 'index']);

Route::get('/about', function () {
    return view('page.about');
});

use App\Http\Controllers\OrderController;
Route::get('/orders', [OrderController::class, 'index']);