<?php

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;


use App\Http\Controllers\DashboardProductController;
use App\Http\Controllers\DashboardCategoryController;
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

Route::get('/profile_edit', function () {
    return view('profile_edit');
});


// Dashboard hanya dapat diakses Admin
Route::middleware(['admin'])->group(function () {
    // Rute-rute yang memerlukan hak akses admin
    Route::get('/dashboard/content', [DashboardController::class, 'index'])->name('dashboard.content.index')->middleware('auth');
    Route::resource('/dashboard/posts', DashboardProductController::class)->middleware('auth');
    Route::get('/dashboard/cetak-data', [DashboardProductController::class, 'cetakProduk'])->name('PdfReporting');
    Route::get('/dashboard/products', [DashboardProductController::class, 'showProducts'])->name('dashboard.posts.index');
    Route::get('/posts/sortPost', [DashboardProductController::class,'SortByProduct'])->name('posts.index');
    Route::get('/posts/search', [DashboardProductController::class, 'searchPost'])->name('posts.search');
    // Halaman Dashboard Product


    // Pdf reporting
    

    Route::get('/dashboard/products/{product:id}/edit', [DashboardProductController::class, 'edit'])->name('dashboard.products.edit');
    Route::put('/dashboard/products/{product:id}', [DashboardProductController::class, 'update'])->name('dashboard.products.update');

});

    // Tambahkan rute berikut agar sesuai dengan kodingan 2

    Route::get('/products/sortPost', [DashboardProductController::class, 'SortByProduct']);
    Route::get('/products/showProducts', [DashboardProductController::class, 'showProducts']);

// Halaman Product
Route::get('/product', [ProductController::class, 'index']);
 // halaman detail product
 Route::get('/product/{product:code}', [ProductController::class, 'show'])->name('products.show');

//Category
Route::get('/categories', [CategoryController::class, 'index']);

// Halaman detail Category
Route::get('/categories/{category:code}', [CategoryController::class, 'show'])->name('categories.show')->middleware('auth');



Route::get('/profile/edit', [DashboardProductController::class, 'editProfile'])->name('profile.edit');
Route::post('/profile/update', [DashboardProductController::class, 'updateProfile'])->name('profile.update');


Route::get('/products/search', [ProductController::class, 'search'])->name('products.search');
Route::get('/products', [ProductController::class, 'SortBy'])->name('products.index');

Route::get('/category/search', [DashboardCategoryController::class, 'searchCategory'])->name('category.search');
Route::get('/category/sort', [DashboardCategoryController::class, 'SortCategory'])->name('sort.search');




// Rute resource Dashboard Category
Route::resource('/dashboard/categories', DashboardCategoryController::class)->except('show')->middleware('auth');
Route::put('categories/{category:id}', [DashboardCategoryController::class, 'update'])->name('dashboard.categories.update');

Route::get('/dashboard/categories/{category:code}/edit', [DashboardCategoryController::class, 'edit'])->name('dashboard.categories.edit');

Route::get('/dashboard/content/index', [DashboardController::class, 'index'])
    ->name('dashboard.content.index')
    ->middleware('auth');

    