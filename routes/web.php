<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/product', function() {
    return view('pages.product');
});

Route::post('/login', [UserController::class, 'login']);
Route::get('/product', [ProductController::class, 'product']);