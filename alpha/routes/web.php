<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

Route::get('/users', [ProductController::class, 'index']);

Route::get('./users', [ProductController::class, 'usingwith']);

Route::get('/users', [ProductController::class, 'usingview']);

Route::get('/', function () {
    return view('welcome');
});
