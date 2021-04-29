<?php

use App\Http\Controllers\DosenController;
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

//route CRUD (input,edit,delet)
Route::get('/pegawai', 'PegawaiController@index'); //index halaman awal

//fungsi tambah data
Route::get('/pegawai/tambah', 'PegawaiController@tambah');
Route::post('/pegawai/store', 'PegawaiController@store');

//fungsi edit
Route::get('/pegawai/edit/{id}', 'PegawaiController@edit');
Route::post('/pegawai/update', 'PegawaiController@update');

//fungsi delete
Route::get('/pegawai/hapus/{id}', 'PegawaiController@hapus');

//fungsi cari atau search

Route::get('/pegawai/cari', 'PegawaiController@cari');






// Route::get('dosen', 'DosenController@index'); //cara memanggil baseurl/dosen masuk ke controller dosencontroller -> index

// Route::get('/pegawai/{nama}', 'PegawaiController@index'); //memanggil controller pegawaicontroller ->index

// Route::get('/formulir', 'PegawaiController@formulir');
// Route::post('/formulir/proses', 'PegawaiController@proses');
