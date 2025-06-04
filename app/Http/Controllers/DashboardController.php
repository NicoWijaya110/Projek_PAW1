<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use App\Models\User;
use App\Models\Jadwal;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'jumlahMateri' => Materi::count(),
            'jumlahDosen' => User::where('role', 'dosen')->count(),
            'jumlahMahasiswa' => User::where('role', 'mahasiswa')->count(),
            'jumlahJadwal' => Jadwal::count()
        ]);
    }
}
