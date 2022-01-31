<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

Route::get('/compact', [ProductController::class, 'index']);

Route::get('./with', [ProductController::class, 'usingwith']);

Route::get('/view', [ProductController::class, 'usingview']);

Route::get('/', function () {
    return view('welcome');
});
