<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\AdminGuruController;
use App\Http\Controllers\admin\AdminSiswaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\bk\bkDashboardController;
use App\Http\Controllers\kepalaSekolah\kepalaSekolahController;
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
        //dashboard
        Route::get('/admin', [AdminDashboardController::class, 'index']);
        //siswa
        Route::get('/admin/kelola-siswa', [AdminSiswaController::class, 'index']);
        Route::get('/admin/kelola-siswa/create', [AdminSiswaController::class, 'create']);
        Route::post('/admin/kelola-siswa/store', [AdminSiswaController::class, 'store']);
        Route::get('/admin/kelola-siswa/edit/{id}', [AdminSiswaController::class, 'edit']);
        Route::put('/admin/kelola-siswa/update/{id}', [AdminSiswaController::class, 'update']);
        Route::delete('/admin/kelola-siswa/delete/{id}', [AdminSiswaController::class, 'delete']);
        //guru
        Route::get('/admin/kelola-guru', [AdminGuruController::class, 'index']);
        Route::get('/admin/kelola-guru/create', [AdminGuruController::class, 'create']);
        Route::post('/admin/kelola-guru/store', [AdminGuruController::class, 'store']);
        Route::get('/admin/kelola-guru/edit/{id}', [AdminGuruController::class, 'edit']);
        Route::put('/admin/kelola-guru/update/{id}', [AdminGuruController::class, 'update']);
        Route::delete('/admin/kelola-guru/delete/{id}', [AdminGuruController::class, 'delete']);
        //admin 
        Route::get('/admin/kelola-admin', [AdminController::class, 'index']);
        Route::get('/admin/kelola-admin/create', [AdminController::class, 'create']);
        Route::post('/admin/kelola-admin/store', [AdminController::class, 'store']);
        Route::get('/admin/kelola-admin/edit/{id}', [AdminController::class, 'edit']);
        Route::put('/admin/kelola-admin/update/{id}', [AdminController::class, 'update']);
        Route::delete('/admin/kelola-admin/delete/{id}', [AdminController::class, 'delete']);
    });
    Route::middleware(['role:siswa'])->group(function() {
        Route::get('/siswa', [siswaDashboardController::class, 'index']);
    });
    Route::middleware(['role:kepala-sekolah'])->group(function() {
        Route::get('/kepala-sekolah', [kepalaSekolahController::class, 'index']);
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