<?php

use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\bk\bkDashboardController;
use App\Http\Controllers\kepalaSekolah\kepalaSekolahDashboardController;
use App\Http\Controllers\siswa\siswaDashboardController;
use App\Http\Controllers\tataUsaha\tataUsahaDashboardController;
use App\Http\Controllers\wakaKesiswaan\wakaKesiswaanDashboardController;
use App\Http\Controllers\wakaKurikulum\wakaKurikulumDashboardController;
use App\Http\Controllers\siswa\SiswaLaporanController;
use App\Http\Controllers\kepalaSekolah\kepalaSekolahLaporanController;
use App\Http\Controllers\kepalaSekolah\kepalaSekolahRiwayatController;
use App\Http\Controllers\kepalaSekolah\kepalaSekolahTanggapanController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/doLogin', [AuthController::class, 'doLogin']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::middleware(['auth'])->group(function() {
    Route::middleware(['role:admin'])->group(function() {
        Route::get('/admin', [AdminDashboardController::class, 'index']);
    });
    Route::middleware(['role:siswa'])->group(function() {
        Route::get('/siswa', [SiswaDashboardController::class, 'index'])->name('siswa.dashboard');
        Route::get('/laporan', [SiswaLaporanController::class, 'index'])->name('siswa.laporan');
        Route::get('/laporan/create', [SiswaLaporanController::class, 'create'])->name('siswa.laporan.create');
        Route::get('/laporan/cetak', [SiswaLaporanController::class, 'cetak'])->name('siswa.laporan.cetak');
    });
    Route::middleware(['role:kepala-sekolah'])->group(function () {
    Route::get('/kepala-sekolah', [KepalaSekolahDashboardController::class, 'index'])->name('kepala.dashboard');
    Route::get('/kepala-sekolah/tanggapan', [KepalaSekolahTanggapanController::class, 'index'])->name('kepala.tanggapan');
    Route::get('/kepala-sekolah/riwayat', [KepalaSekolahRiwayatController::class, 'index'])->name('kepala.riwayat');
    Route::get('/kepala-sekolah/laporan', [KepalaSekolahLaporanController::class, 'index'])->name('kepala.laporan');
    });
    Route::middleware(['role:waka-kesiswaan'])->group(function() {
        Route::get('/waka-kesiswaan', [wakaKesiswaanDashboardController::class, 'index']);
    });
    Route::middleware(['role:waka-kurikulum'])->group(function() {
        Route::get('/waka-kurikulum', [wakaKurikulumDashboardController::class, 'index']);
    });
    Route::middleware(['role:BK'])->group(function() {
        Route::get('/bk', [bkDashboardController::class, 'index']);
    });
    Route::middleware(['role:tata-usaha'])->group(function() {
        Route::get('/tata-usaha', [tataUsahaDashboardController::class, 'index']);
    });
});
