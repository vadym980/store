<?php

use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class,'index'])->name('main');
Route::get('/category/{slug}', [MainController::class,'category'])->name('category');
Route::get('/category', [MainController::class,'categories'])->name('categories');
Route::get('/product/{slug}', [MainController::class,'product'])->name('product');
