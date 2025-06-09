<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dosen = Dosen::all();
        return view('dosen.index', compact('dosen'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dosen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
        'NO' => 'required|unique:Dosen',
        'nama' => 'required',
        'Tahun_Masuk' => 'required',
        'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    if ($request->hasFile('foto')) {
        $file = $request->file('foto');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('images'), $filename);
        $validated['foto'] = $filename;
    }

    Dosen::create($validated);
    return redirect()->route('dosen.index')->with('success', 'Data dosen berhasil ditambahkan.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Dosen $dosen)
    {
        $dosen = Dosen::findOrFail($dosen->id);
        return view('Dosen.show', compact('dosen'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dosen $dosen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dosen $dosen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dosen $dosen)
    {
        $dosen = Dosen::findOrFail($dosen->id);
        //hapus foto jika ada
        if ($dosen->foto) {
            $filePath = public_path('images/' . $dosen->foto);
            if (file_exists($filePath)) {
                unlink($filePath);
            }
        }
        //hapus data dosen
        $dosen->delete();
        return redirect()->route('dosen.index')->with('success', 'Dosen berhasil dihapus.');
    }
}
