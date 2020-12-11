<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::resource('/products', ProductController::class);
Route::resource('/categories', CategoryController::class);


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
