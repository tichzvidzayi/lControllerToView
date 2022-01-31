<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

Route::get('/users1', [ProductController::class, 'index']);

Route::get('./users2', [ProductController::class, 'usingwith']);

Route::get('/users3', [ProductController::class, 'usingview']);

Route::get('/', function () {
    return view('welcome');
});
