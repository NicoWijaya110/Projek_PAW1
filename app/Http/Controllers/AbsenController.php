<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use App\Models\Mahasiswa;
use App\Models\Materi;
use Illuminate\Http\Request;

class AbsenController extends Controller
{
    /**
     * Tampilkan semua data absensi.
     */
    public function index()
    {
        $absens = Absen::with(['mahasiswa', 'materi'])->get();
        return view('absen.index', compact('absens'));
    }

    /**
     * Tampilkan form tambah absensi.
     */
    public function create()
    {
        $mahasiswa = Mahasiswa::all();
        $materi = Materi::all();
        return view('absen.create', compact('mahasiswa', 'materi'));
    }

    /**
     * Simpan absensi baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'mahasiswa_id' => 'required|exists:mahasiswas,id',
            'materi_id' => 'required|exists:materis,id',
            'pertemuan_ke' => 'required|integer|min:1|max:30',
            'status' => 'required|in:H,I,A',
        ]);

        Absen::create($request->all());

        return redirect()->route('absen.index')->with('success', 'Absensi berhasil ditambahkan.');
    }

    /**
     * Tampilkan detail satu absensi.
     */
    public function show(Absen $absen)
    {
        return view('absen.show', compact('absen'));
    }

    /**
     * Tampilkan form edit absensi.
     */
    public function edit(Absen $absen)
    {
        $mahasiswa = Mahasiswa::all();
        $materi = Materi::all();
        return view('absen.edit', compact('absen', 'mahasiswa', 'materi'));
    }

    /**
     * Proses update data absensi.
     */
    public function update(Request $request, Absen $absen)
    {
        $request->validate([
            'mahasiswa_id' => 'required|exists:mahasiswas,id',
            'materi_id' => 'required|exists:materis,id',
            'pertemuan_ke' => 'required|integer|min:1|max:30',
            'status' => 'required|in:H,I,A',
        ]);

        $absen->update($request->all());

        return redirect()->route('absen.index')->with('success', 'Absensi berhasil diperbarui.');
    }

    /**
     * Hapus absensi.
     */
    public function destroy(Absen $absen)
    {
        $absen->delete();
        return redirect()->route('absen.index')->with('success', 'Absensi berhasil dihapus.');
    }
    
    public function rekap()
{
    // Ambil semua mahasiswa beserta data absensinya
    $mahasiswa = Mahasiswa::with('absensi')->get();

    // Kirim ke view
    return view('absen.rekap', compact('mahasiswa'));
}
}
