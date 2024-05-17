<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [BerandaController::class, 'index'])->name('beranda');
Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/product/show', [ProductController::class, 'show'])->name('product.show');
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('/blogs/show', [BlogController::class, 'show'])->name('blogs.show');
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts');
Route::get('/carts', [CartController::class, 'index'])->name('carts');
