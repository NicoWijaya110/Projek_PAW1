<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index()
    {
        $nilai = Nilai::all();
        return view('nilai.index', compact('nilai'));
    }

    public function create()
    {
        return view('nilai.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'mata_kuliah' => 'required|string|max:255',
            'tugas' => 'required|numeric|min:0|max:100',
            'kuis' => 'required|numeric|min:0|max:100',
            'uts' => 'required|numeric|min:0|max:100',
            'uas' => 'required|numeric|min:0|max:100',
        ]);

        // Hitung rata-rata
        $rataRata = ($request->tugas + $request->kuis + $request->uts + $request->uas) / 4;

        // Tentukan status
        $status = $rataRata >= 70 ? 'Lulus' : 'Tidak Lulus';

        // Simpan data
        Nilai::create([
            'mata_kuliah' => $request->mata_kuliah,
            'tugas' => $request->tugas,
            'kuis' => $request->kuis,
            'uts' => $request->uts,
            'uas' => $request->uas,
            'status' => $status,
        ]);

        return redirect()->route('nilai.index')->with('success', 'Nilai berhasil ditambahkan.');
    }

    public function show(Nilai $nilai)
    {
        return view('nilai.show', compact('nilai'));
    }

    public function edit(Nilai $nilai)
    {
        return view('nilai.edit', compact('nilai'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'mata_kuliah' => 'required|string|max:255',
            'tugas' => 'required|numeric|min:0|max:100',
            'kuis' => 'required|numeric|min:0|max:100',
            'uts' => 'required|numeric|min:0|max:100',
            'uas' => 'required|numeric|min:0|max:100',
        ]);

        $nilai = Nilai::findOrFail($id);

        // Hitung rata-rata
        $rataRata = ($request->tugas + $request->kuis + $request->uts + $request->uas) / 4;

        // Tentukan status
        $status = $rataRata >= 70 ? 'Lulus' : 'Tidak Lulus';

        // Update Data
        $nilai->update([
            'mata_kuliah' => $request->mata_kuliah,
            'tugas' => $request->tugas,
            'kuis' => $request->kuis,
            'uts' => $request->uts,
            'uas' => $request->uas,
            'status' => $status,
        ]);

        return redirect()->route('nilai.index')->with('success', 'Nilai berhasil diubah.');
    }

    public function destroy(Nilai $nilai)
    {
        $nilai->delete();
        return redirect()->route('nilai.index')->with('success', 'Nilai berhasil dihapus.');
    }
}
