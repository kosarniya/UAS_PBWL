<?php

use App\Http\Controllers\InformasiController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\WargaController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/informasi', InformasiController::class);

Route::resource('/jenis', JenisController::class)->only([
    'index', 'store', 'update', 'destroy'
]);

Route::resource('/warga', WargaController::class)->only([
    'index', 'store', 'update', 'destroy'
]);
 


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
