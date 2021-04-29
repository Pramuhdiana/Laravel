<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\ErorController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\NotifikasiController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\WebController;
use App\Models\Telepon;
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

Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::post('/pegawai/store', [PegawaiController::class, 'store']);
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']);
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
Route::put('/pegawai/update/{id}', [PegawaiController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'hapus']);

//guru
// Route::get('/guru', [GuruController::class, 'index']);
// Route::get('/guru/hapus/{id}', [GuruController::class, 'hapus']);
// Route::get('/guru/trash', [GuruController::class, 'trash']);


// one to one table (pengguna & Telepon)
Route::get('/pengguna', [PenggunaController::class, 'index']);

// one to Many table (Article & Tag)
Route::get('/article', [WebController::class, 'index']);

// many to many 
Route::get('/anggota', [AnggotaController::class, 'index']);


// Route untuk upload file
Route::get('/upload', [UploadController::class, 'upload']);
Route::post('/upload/proses', [UploadController::class, 'proses_upload']);

//Route untuk Session
Route::get('/session/tampil', [TestController::class, 'tampilkanSession']);
Route::get('/session/buat', [TestController::class, 'buatSession']);
Route::get('/session/hapus', [TestController::class, 'hapusSession']);

//Route untuk Session dengan flash
Route::get('/pesan', [NotifikasiController::class, 'index']);
Route::get('/pesan/sukses', [NotifikasiController::class, 'sukses']);
Route::get('/pesan/peringatan', [NotifikasiController::class, 'peringatan']);
Route::get('/pesan/gagal', [NotifikasiController::class, 'gagal']);


//Route menampilkan pesan eror
Route::get('/eror/{nama}', [ErorController::class, 'index']);

//Route membuat laporan pdf
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/mahasiswa/cetak_pdf', [MahasiswaController::class, 'cetak_pdf']);

//Route untuk export excel
Route::get('/siswa', [SiswaController::class, 'index']);
Route::get('/siswa/export_excel', [SiswaController::class, 'export_excel']);
