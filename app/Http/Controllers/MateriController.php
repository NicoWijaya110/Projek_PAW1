<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Illuminate\Http\Request;

class MateriController extends Controller
{

    public function index()
    {
        $materi = Materi::all();
        //dd($materis);
        return view('materi.index', compact('materi'));
        
    }


    public function create()
    {   
        
        return view('materi.create');
    }

    
    public function store(Request $request)
    {
        // Validasi input
    $input = $request->validate([
        'NO' => 'required|unique:materis',
        'MATA_KULIAH' => 'required',
        'DOSEN' => 'required',
        'KELAS' => 'required|max:5',
]);

        // Simpan data materi
        Materi::create($input);

    // Redirect ke route materi.index
    return redirect()->route('materi.index')->with('success', 'Materi berhasil ditambahkan');
    }

    public function show(Materi $materi)
    {
        //
    }

    
    public function edit(Materi $materi)
    {
        //
    }

    
    public function update(Request $request, Materi $materi)
    {
        //
    }
    
    public function destroy(Materi $materi)
    {
        //
    }
}

