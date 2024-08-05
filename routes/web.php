<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ViewController;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

Route::prefix('admin')
->middleware(['auth','is_admin'])
    ->group(function () {
        Route::get('/', function () {
            return view('admin.layouts.main');
        });
        Route::resource('category', CategoryController::class);
        Route::resource('article', ArticleController::class);
        Route::get('/home', [HomeController::class, 'index'])->name('homeadmin');
    });

Route::prefix('client')
->group(function () {

    Route::get('/category/{category}', [ViewController::class, 'category'])->name('category');

    Route::get('/categorychild/{categoryChild}', [ViewController::class, 'categoryChild'])->name('categorychild');

    Route::get('/article/{article}', [ViewController::class, 'article'])->name('article');

    Route::post('/seacher', [ViewController::class, 'seacher'])->name('seacher.submit');

});

Route::get('/', [ViewController::class, 'index'])->name('home')->middleware(['auth','is_member']);
// Route::get('auth/login', [LoginController::class, 'showFormLogin'])->name('login');
// Route::post('auth/login', [LoginController::class, 'login']);
// Route::post('auth/logout', [LoginController::class, 'logout'])->name('logout');
// Route::get('auth/register', [RegisterController::class, 'showFormRegister'])->name('register');
// Route::post('auth/register', [RegisterController::class, 'register']);

Route::post('/seacher', [ViewController::class, 'seacher'])->name('seacher.search');

// Route::get('/',function(){
// return view('welcome');
// });
Auth::routes(['verify'=> true]);

//Route::get('/home', [HomeController::class, 'index'])->name('home');



