<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Materi;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jadwal = Jadwal::all();
        //dd($jadwal);
        return view('jadwal.index', compact('jadwal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jadwal = Jadwal::all();
        return view('jadwal.create', compact('jadwal'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
        'NO' => 'required|unique:Jadwal',
        'Hari' => 'required|date_format:d-m-y',
        'Jam' => 'required|time_format:H:i',
        'Mata Kuliah' => 'required|string|max:50',
        'Kelas' => 'required|string|max:30',
        'Dosen' => 'required|string|max:50',
        
    ]);   
  
    }
    /**
     * Display the specified resource.
     */
    public function show(Jadwal $jadwal)
    {
        return view('jadwal.show', compact('jadwal'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jadwal $jadwal)
    {
        return view('jadwal.edit', compact('jadwal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jadwal $jadwal)
    {
              $validated = $request->validate([
        'NO' => 'required|unique:Jadwal',
        'Hari' => 'required|date_format:d-m-y',
        'Jam' => 'required|time_format:H:i',
        'Mata Kuliah' => 'required|string|max:50',
        'Kelas' => 'required|string|max:30',
        'Dosen' => 'required|string|max:50',
              ]);
                      $jadwal = Jadwal::findOrFail($id);
        $jadwal->update($request->all());

        return redirect()->route('jadwal.index')->with('success', 'Data berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jadwal $jadwal)
    {
               $jadwal->delete();

        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil dihapus.');
    }
}
