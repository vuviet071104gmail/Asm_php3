<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ViewController;
use Illuminate\Http\Request;
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

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.layouts.main');
    });
    Route::resource('category', CategoryController::class);
    Route::resource('product', ProductController::class);
  
});
Route::prefix('client')->group(function () {
    
Route::get('/category/{category}', [ViewController::class, 'category'])->name('category');

Route::get('/categorychild/{categoryChild}', [ViewController::class, 'categoryChild'])->name('categorychild');

Route::get('/article/{article}', [ViewController::class, 'article'])->name('article');

Route::post('/seacher', [ViewController::class, 'seacher'])->name('seacher.submit');
});
Route::get('/', [ViewController::class, 'index'])->name('home');

// Route::post('/seacher', [ViewController::class, 'seacher'])->name('seacher.search');