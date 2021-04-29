<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\ValidasiController;
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
// Route::get('/', [namacontroller::class, 'namaclassnya']); //cara menggunakan controller

Route::get('/', function () {
    return view('welcome');
});

// //menghubungkan dengan controller validasi class input
// Route::get('/input', 'ValidasiController@input');
Route::get('/input', [ValidasiController::class, 'input']);
Route::post('/proses', [ValidasiController::class, 'proses']);
