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
    return redirect('/dashboard');
});

Route::get('/dashboard', function () {
    return view('pages.dashboard.index', [
        'title' => 'Dashboard',
        'active' => 'dashboard',
    ]);
});

Route::get('/category', function () {
    return view('pages.category.index', [
        'title' => 'Kategori',
        'active' => 'category',
    ]);
});

Route::get('/goods', function () {
    return view('pages.goods.index', [
        'title' => 'Barang',
        'active' => 'goods',
    ]);
});

Route::get('/recap', function () {
    return view('pages.recap.index', [
        'title' => 'Rekap',
        'active' => 'recap',
    ]);
});

Route::get('/account', function () {
    return view('pages.account.index', [
        'title' => 'Akun',
        'active' => 'account',
    ]);
});

Route::get('/about', function () {
    return view('pages.about.index', [
        'title' => 'Tentang',
        'active' => 'about',
    ]);
});
