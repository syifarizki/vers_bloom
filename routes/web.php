<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardController;

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

Route::get('/dashboard', [DashboardController::class,'showDashboard'])->middleware("auth"); 

Route::resource('/dashboard/posts', DashboardPostController::class);