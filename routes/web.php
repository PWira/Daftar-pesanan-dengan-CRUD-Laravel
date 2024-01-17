<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\foodController;

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
Route::get('logs', function () {
    return view('proyek.logs');
});
Route::get('menu', function () {
    return view('proyek.menu');
});
Route::get('struk', function () {
    return view('proyek.struk');
});



Route::get('tambah-pesanan', function (Request $req) {
    return view('proyek.tambahPesanan')->with('request', $req);
});

Route::get('tambah-menu', function () {
    return view('proyek.tambahMenu');
});

Route::post('tambah-form-pesanan',[foodController::class, 'tambahPesanan']);
Route::post('tambah-form-makanan',[foodController::class, 'tambahMakanan']);

Route::get('pesanan', [foodController::class, 'detailPesanan']);
Route::get('tambah-pesanan', [foodController::class, 'listMenu']);
Route::get('menu', [foodController::class, 'lihatMenu']);
Route::get('logs', [foodController::class, 'riwayat']);

Route::get('hapus-pesanan/{id}',[stokController::class, 'hapusPesanan']);
Route::get('hapus-makanan/{id}',[stokController::class, 'hapusMakanan']);

