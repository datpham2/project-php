<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/product', function () {
    return view('products');
})->name('product');
//Login
Route::get('/login',[AuthController::class, 'ShowLoginForm'])->name('ShowLoginForm');
Route::post('/login', [AuthController::class, 'login'])->name('login');
//Register
Route::get('/register',[AuthController::class, 'ShowRegisterForm'])->name('ShowRegisterForm');
Route::post('/register',[AuthController::class, 'register'])->name('register');
//Logout
Route::get('/logout',[AuthController::class, 'logout'])->name('logout');