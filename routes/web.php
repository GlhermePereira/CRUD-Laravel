<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisterController;
//use Illuminate\Http\Request;

Route::resource('products', ProductsController::class);
//Route::get('/', [ProductsController::class, 'index']);
//Auth::routes();

Route::view('login','auth.login');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::view ('register','auth.register');
Route::post('register',[RegisterController::class, 'create'])->name('register');

Route::post('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('auth.login');
});