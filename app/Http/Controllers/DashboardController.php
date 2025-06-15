<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Jadwal;
use App\Models\mahasiswa;
use App\Models\Materi;
use App\Models\Nilai;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'jumlahMahasiswa' => mahasiswa::count(),
            'jumlahDosen' => Dosen::count(),
            'jumlahJadwal' => Jadwal::count(),
            'jumlahMateri' => Materi::count(),
            'jumlahNilai' => Nilai::count(),
        ]);
    }
}
