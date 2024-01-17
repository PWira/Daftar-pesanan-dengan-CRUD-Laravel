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

Route::get('laravel_template', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('homepage');
});

Route::get('pesanan', function () {
    return view('pesanan');
});
Route::get('tambah-pesanan', function (Request $req) {
    return view('proyek.tambahPesanan')->with('request', $req);
});

Route::get('menu', function () {
    return view('menu');
});

Route::get('tambahMenu', function () {
    return view('tambah');
});

Route::get('logs', function () {
    return view('logs');
});
