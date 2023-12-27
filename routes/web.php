<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardProductController;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});
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

Route::get('/product', [ProductController::class, 'index']);
 // halaman detail product
Route::get('/product/{product:code}', [ProductController::class, 'show']);

Route::get('/categories', function() {
    return view('categories', [
        'title' =>'Product Categories',
        'categories' => Category::all()
    ]);
});


// pas buat searchnya ini di benerin soalnya pas buka category sama categories gabisa
Route::get('/categories/{category:code}', function(Category $category) {
    return view('product', [
        'title' => "Product By Category: $category->name",
        'products' => $category->products->load('category')
    ]);
});

Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/dashboard/posts', DashboardProductController::class)->middleware('auth');

Route::get('/dashboard/cetak-data', [DashboardProductController::class, 'cetakProduk'])->name('PdfReporting');