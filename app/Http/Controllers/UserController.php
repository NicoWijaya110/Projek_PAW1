<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $User = User::all();
        return view('User.index', compact('User'));
    }

    public function create()
    {   
        return view('User.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|integer',
            'mata_kuliah' => 'required|string|max:255',
            'dosen' => 'required|string|max:255',
            'kelas' => 'required|string|max:50',
        ]);

        User::create($request->all());

        return redirect()->route('User.index')->with('success', 'User berhasil ditambahkan.');
    }

    public function show(User $User)
    {
        return view('User.show', compact('User'));
    }

    public function edit(User $User)
    {
        return view('User.edit', compact('User'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'no' => 'required|integer',
            'mata_kuliah' => 'required|string|max:255',
            'dosen' => 'required|string|max:255',
            'kelas' => 'required|string|max:50',
        ]);

        $User = User::findOrFail($id);
        $User->update($request->all());

        return redirect()->route('User.index')->with('success', 'Data berhasil diubah.');
    }

    public function destroy(User $User)
    {
        $User->delete();

        return redirect()->route('User.index')->with('success', 'User berhasil dihapus.');
    }
}
