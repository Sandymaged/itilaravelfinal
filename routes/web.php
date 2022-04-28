<?php

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

Route::get('/', function () {
    return view('index');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'indexpage'])->name('home');
Route::resource('prod', App\Http\Controllers\ProductController::class);
Route::resource('cat', App\Http\Controllers\CategoryController::class);
Route::resource('brand', App\Http\Controllers\BrandController::class);
Route::resource('order', App\Http\Controllers\OrderController::class);
Route::resource('user', App\Http\Controllers\UserController::class);
Route::resource('edituser', App\Http\Controllers\EditUserController::class);
Route::resource('sup', App\Http\Controllers\SupportController::class);

Route::delete('/orderdelete', [App\Http\Controllers\OrderController::class, 'del']);

Route::get('/index', [App\Http\Controllers\HomeController::class, 'indexpage']);
Route::get('/products', [App\Http\Controllers\HomeController::class, 'allproducts']);
Route::post('/checkout', [App\Http\Controllers\HomeController::class, 'order']);
Route::get('/checkout2', [App\Http\Controllers\HomeController::class, 'checkout']);
Route::post('/checkout3', [App\Http\Controllers\HomeController::class, 'totalcheckout']);
Route::get('/problem', [App\Http\Controllers\HomeController::class, 'problem']);
Route::get('/finalcheckout', [App\Http\Controllers\HomeController::class, 'finalcheckout']);
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile']);
Route::get('/profileinfo', [App\Http\Controllers\HomeController::class, 'profileinfo']);
Route::get('/orderss', [App\Http\Controllers\HomeController::class, 'orderss']);
