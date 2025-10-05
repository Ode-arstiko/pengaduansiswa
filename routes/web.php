<?php

use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\bk\bkDashboardController;
use App\Http\Controllers\kepalaSekolah\kepalaSekolahDashboardController;
use App\Http\Controllers\siswa\siswaDashboardController;
use App\Http\Controllers\tataUsaha\tataUsahaDashboardController;
use App\Http\Controllers\wakaKesiswaan\wakaKesiswaanDashboardController;
use App\Http\Controllers\wakaKurikulum\wakaKurikulumDashboardController;
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
        Route::get('/siswa', [siswaDashboardController::class, 'index']);
    });
    Route::middleware(['role:kepala-sekolah'])->group(function () {
    Route::get('/kepala-sekolah', [kepalaSekolahDashboardController::class, 'index'])->name('kepala.dashboard');
    Route::get('/kepala-sekolah/tanggapan', [TanggapanController::class, 'index'])->name('kepala.tanggapan');
    Route::get('/kepala-sekolah/riwayat-tanggapan', [RiwayatController::class, 'index'])->name('kepala.riwayat');
    Route::get('/kepala-sekolah/laporan', [LaporanController::class, 'index'])->name('kepala.laporan');
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
