<?php

use App\Http\Controllers\DashboardCategoryController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardProductController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;


use App\Models\Category;
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



Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);

Route::get('/login',  [LoginController::class,'index'])->name('login')-> middleware('guest');
Route::post('/login',  [LoginController::class,'authenticate']);
Route::post('/logout',  [LoginController::class,'logout']);

Route::get('/register',  [RegisterController::class,'index']);
Route::post('/register',  [RegisterController::class,'store'])->middleware("guest");

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('google.callback');

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/profile', function () {
    return view('profile');
});

// Akses hanya admin yang dapat masuk ke dashboard
Route::get('/dashboard', function() {return view('dashboard.index');})->name('dashboard')->middleware('auth');

// Halaman Dashboard Product
Route::resource('/dashboard/posts', DashboardProductController::class)->middleware('auth');

// Pdf reporting
Route::get('/dashboard/cetak-data', [DashboardProductController::class, 'cetakProduk'])->name('PdfReporting');

// Dashboard hanya dapat diakses Admin
Route::middleware(['admin'])->group(function () {
    // Rute-rute yang memerlukan hak akses admin
    Route::get('/dashboard', function() {return view('dashboard.index');})->name('dashboard')->middleware('auth');
});

// Halaman Product
Route::get('/product', [ProductController::class, 'index']);
 // halaman detail product
 Route::get('/product/{product:code}', [ProductController::class, 'show'])->name('products.show');

//Category
Route::get('/categories', [CategoryController::class, 'index']);

// Halaman detail Category
Route::get('/categories/{category:code}', [CategoryController::class, 'show'])->name('categories.show')->middleware('auth');


// Rute resource Dashboard Category
Route::resource('/dashboard/categories', DashboardCategoryController::class)->except('show')->middleware('auth');

// Rute Edit Category
Route::get('/dashboard/categories/{category:code}/edit', [DashboardCategoryController::class, 'edit'])->name('dashboard.categories.edit');

