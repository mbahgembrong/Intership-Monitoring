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
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


Route::resource('roles', App\Http\Controllers\RoleController::class);


Route::resource('bidangs', App\Http\Controllers\BidangController::class);


Route::resource('stafs', App\Http\Controllers\StafController::class);


Route::resource('instansis', App\Http\Controllers\InstansiController::class);


Route::resource('siswas', App\Http\Controllers\SiswaController::class);


Route::resource('pembimbings', App\Http\Controllers\PembimbingController::class);


Route::resource('pkls', App\Http\Controllers\PklController::class);


Route::resource('absensis', App\Http\Controllers\AbsensiController::class);


Route::resource('laporans', App\Http\Controllers\LaporanController::class);


Route::resource('penilaians', App\Http\Controllers\PenilaianController::class);


Route::resource('notifikasis', App\Http\Controllers\NotifikasiController::class);
