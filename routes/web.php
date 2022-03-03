<?php

use App\Http\Controllers\BarangControllers;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::resource('barang', BarangControllers::class)->middleware('auth');
Route::resource('category', CategoryController::class)->middleware('auth');

Route::get('/', [HomeController::class, 'index']);
Route::get('/produk/{barang:id}', [HomeController::class, 'show']);

Route::post('/order/buy/success', [OrderController::class, 'store']);
Route::resource('order', OrderController::class);
Route::get('/order/buy/{barang:id}', [OrderController::class, 'index']);
Route::get('/order/kwitansi/{order:id}', [OrderController::class, 'show']);
