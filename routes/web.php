<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
//use Illuminate\Http\Request;

Route::resource('products', ProductsController::class);
Route::get('/', [ProductsController::class, 'index']);