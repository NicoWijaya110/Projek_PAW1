<?php

use App\Http\Controllers\AbsenController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\MateriController;
use App\Models\Jadwal;
use App\Models\Materi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\NilaiController;
use App\Models\Absensi;
use App\Models\Nilai;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('materi', MateriController::class);
Route::resource('jadwal',JadwalController::class);
Route::resource('dashboard', DashboardController::class);
Route::resource('dosen',DosenController::class);
Route::resource('mahasiswa', MahasiswaController::class);
Route::resource('nilai',NilaiController::class);
Route::resource('absen', AbsenController::class);
Route::get('/rekap-absensi', [AbsenController::class, 'rekap'])->name('absen.rekap');
