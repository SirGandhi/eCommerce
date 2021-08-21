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

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/');
});

Route::get('/product', function() {
    return view('pages.product');
});

Route::get('/details', function(){
    return view('pages.details');
});

Route::post('/login', [UserController::class, 'login']);
Route::get('/product', [ProductController::class, 'product']);
Route::get('/details/{id}', [ProductController::class, 'detailsPage']);
Route::get('/search', [ProductController::class, 'search']);
Route::post('/add-to-cart', [ProductController::class, 'addToCart']);