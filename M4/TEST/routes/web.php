<?php

use App\Http\Controllers\AuthController;

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
// // brand routes
// Route::get('/show/{id}', [BrandController::class, 'show'])->name('brand.show');


// Route::get('/brand', [BrandController::class, 'index'])->name('brand.index');

// Route::get('/brand/create', [BrandController::class, 'create'])->name('brand.create');

// Route::put('/brand/{id}', [BrandController::class, 'update'])->name('brand.update');


// Route::get('/brand/edit/{id}', [BrandController::class, 'edit'])->name('brand.edit');

// Route::post('/brand/store', [BrandController::class, 'store'])->name('brand.store');

// Route::delete('brand/{id}', [BrandController::class, 'destroy'])->name('brand.destroy');

// // categorie routes

// Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

// Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');

// Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');

// Route::get('/categories/show/{id}', [CategoryController::class, 'show'])->name('categories.show'); 

// Route::get('/categories/edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit');

// Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store');

// Route::delete('category/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');

// Route::get('/', function () {
//     return view('admin.master');
// });

Route::get('/login', [AuthController::class, 'showLoginForm']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/welcome', [AuthController::class, 'welcome']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/regenerate', [AuthController::class, 'regenerateSession']);