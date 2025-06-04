<?php

use App\Http\Controllers\JadwalController;
use App\Http\Controllers\MateriController;
use App\Models\Jadwal;
use App\Models\Materi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('materi', MateriController::class);
Route::resource('jadwal',JadwalController::class);
Route::resource('dashboard', DashboardController::class);
