<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $Mahasiswa = Mahasiswa::all();
        return view('Mahasiswa.index', compact('Mahasiswa'));
    }

    public function create()
    {   
        return view('Mahasiswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'npm' => 'required|string|max:11',
            'nama' => 'required|string|max:30',
            'jk' => 'required|string|max:15',
            'tanggal_lahir' => 'required|date_format:d-m-y',
            'asal_sma' => 'required|string|max:30',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        Mahasiswa::create($request->all());

        return redirect()->route('Mahasiswa.index')->with('success', 'Mahasiswa berhasil ditambahkan.');
    }

    public function show(Mahasiswa $Mahasiswa)
    {
        return view('Mahasiswa.show', compact('Mahasiswa'));
    }

    public function edit(Mahasiswa $Mahasiswa)
    {
        return view('Mahasiswa.edit', compact('Mahasiswa'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'no' => 'required|integer',
            'mata_kuliah' => 'required|string|max:255',
            'dosen' => 'required|string|max:255',
            'kelas' => 'required|string|max:50',
        ]);

        $Mahasiswa = Mahasiswa::findOrFail($id);
        $Mahasiswa->update($request->all());

        return redirect()->route('Mahasiswa.index')->with('success', 'Data berhasil diubah.');
    }

    public function destroy(Mahasiswa $Mahasiswa)
    {
        $Mahasiswa->delete();

        return redirect()->route('Mahasiswa.index')->with('success', 'Mahasiswa berhasil dihapus.');
    }
}
