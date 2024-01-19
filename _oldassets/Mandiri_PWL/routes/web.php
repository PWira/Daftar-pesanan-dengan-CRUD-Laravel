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
    return view('proyek.pesanan');
});


Route::get('menu', function () {
    return view('proyek.menu');
});

Route::get('tambahmenu', function () {
    return view('proyek.tambahmenu');
});

Route::get('logs', function () {
    return view('proyek.logs');
});

Route::get('struk', function () {
    return view('proyek.struk');
});

