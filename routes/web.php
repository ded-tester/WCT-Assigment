<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

//use App\Http\Controllers\ProductController;
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




Route::resource('/categories',App\Http\Controllers\CategoryController::class);
Route::resource('/products',App\Http\Controllers\ProductController::class);

Route::get('/', [App\Http\Controllers\PageController::class, 'index'])->name('home');

Auth::routes();


