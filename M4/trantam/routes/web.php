<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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
Route::get('/', [ProductController::class, 'index'])->middleware('auth.user');
Route::get('cart', [ProductController::class, 'cart'])->name('cart')->middleware('auth.user');
Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart')->middleware('auth.user');
Route::patch('update-cart', [ProductController::class, 'update'])->name('update.cart')->middleware('auth.user');
Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove.from.cart')->middleware('auth.user');

// login

Route::get('/login', [UserController::class, 'showLoginForm']);
Route::post('/login', [UserController::class, 'login'])->name('user.login');
Route::get('/logout', [UserController::class, 'logout']);
Route::get('/regenerate', [UserController::class, 'regenerateSession']);
Route::post('/logout', [UserController::class,'logout'])->name('logout');

Route::get('/add', [UserController::class, 'add'])->name('user.add');

Route::get('/store', [UserController::class, 'store'])->name('user.store');




// nhớ nhúng cotroller





