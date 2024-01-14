<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;

class AnggotaController extends Controller
{
    public function index()
    {
        $anggota = Anggota::all();
        return view('anggota.index', compact('anggota'));
    }

    public function create()
    {
        return view('anggota.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required ',
            'no_hp' => 'required|string|max:15',  
            'alamat' => 'required|string|max:255',
        ]);

        Anggota::create($request->all());

        return redirect()->route('anggota.index')->with('success', 'Anggota berhasil ditambahkan');
    }

    public function show($id)
    {
        $anggota = Anggota::findOrFail($id);
        return view('anggota.show', compact('anggota'));
    }

    public function edit($id)
    {
        $anggota = Anggota::findOrFail($id);
        return view('anggota.edit', compact('anggota'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required',
            'no_hp' => 'required|string|max:15',
            'alamat' => 'required|string|max:255',
        ]);

        $anggota = Anggota::findOrFail($id);
        $anggota->update($request->all());

        return redirect()->route('anggota.index')->with('success', 'Anggota berhasil diubah');
    }

    public function destroy($id)
    {
        $anggota = Anggota::findOrFail($id);
        $anggota->delete();

        return redirect()->route('anggota.index')->with('success', 'Anggota berhasil dihapus');
    }
}
