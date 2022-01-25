<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GoodsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RecapController;
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
    return redirect('/dashboard');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::resource('/category', CategoryController::class)->except(['show']);
    Route::get('/categories/data', [CategoryController::class, 'data'])->name('category.data');
    Route::resource('/goods', GoodsController::class)->except(['show']);
    Route::get('/goodss/data', [GoodsController::class, 'data'])->name('goods.data');
    Route::resource('/recap', RecapController::class)->except(['show']);
    Route::get('/recaps/data', [RecapController::class, 'data'])->name('recap.data');
    Route::get('/about', [AboutController::class, 'index']);
    Route::get('/account', [AccountController::class, 'index']);
    Route::put('/account', [AccountController::class, 'index']);
    Route::post('/logout', [LoginController::class, 'logout']);
});

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);
});



