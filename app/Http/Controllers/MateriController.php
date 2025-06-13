<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function index()
    {
    $materi = Materi::all();
    return view('materi.index', compact('materi'));
    }

    public function create()
    {   
        return view('materi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'mata_kuliah' => 'required|string|max:255',
            'dosen' => 'required|string|max:255',
            'kelas' => 'required|string|max:50',
        ]);

        Materi::create($request->all());

        return redirect()->route('materi.index')->with('success', 'Materi berhasil ditambahkan.');
    }

    public function show(Materi $materi)
    {
        return view('materi.show', compact('materi'));
    }

    public function edit(Materi $materi)
    {
        $materi = Materi::findOrFail($materi->id);
        return view('materi.edit', compact('materi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'mata_kuliah' => 'required|string|max:255',
            'dosen' => 'required|string|max:255',
            'kelas' => 'required|string|max:50',
        ]);

        $materi = Materi::findOrFail($id);
        $materi->update($request->all());

        return redirect()->route('materi.index')->with('success', 'Data berhasil diubah.');
    }

    public function destroy(Materi $materi)
    {
        $materi->delete();

        return redirect()->route('materi.index')->with('success', 'Materi berhasil dihapus.');
    }
}
