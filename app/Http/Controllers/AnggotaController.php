<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;

class AnggotaController extends Controller
{
    // Menampilkan semua anggota
    public function index()
    {
        $anggota = Anggota::all();
        return view('anggota.index', compact('anggota'));
    }
    
    // Menampilkan formulir untuk menambah anggota
    public function create()
    {
        return view('anggota.create');
    }

    // Menyimpan data anggota yang baru
    public function store(Request $request)
    {
        // Validasi data sebelum disimpan
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required',
            'no_hp' => 'required|string|max:15',
            'alamat' => 'required|string|max:255',
        ]);

        // Membuat record anggota baru
        Anggota::create($request->all());

        return redirect()->route('anggota.index')->with('success', 'Anggota berhasil ditambahkan');
    }

    // Menampilkan detail anggota
    public function show($id)
    {
        $anggota = Anggota::findOrFail($id);
        return view('anggota.show', compact('anggota'));
    }

    // Menampilkan formulir untuk mengedit anggota
    public function edit($id)
    {
        $anggota = Anggota::findOrFail($id);
        return view('anggota.edit', compact('anggota'));
    }

    // Menyimpan perubahan pada data anggota
    public function update(Request $request, $id)
    {
        // Validasi data sebelum diupdate
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required',
            'no_hp' => 'required|string|max:15',
            'alamat' => 'required|string|max:255',
        ]);

        // Mengambil anggota yang akan diupdate
        $anggota = Anggota::findOrFail($id);

        // Mengupdate record anggota
        $anggota->update($request->all());

        return redirect()->route('anggota.index')->with('success', 'Anggota berhasil diubah');
    }

    // Menghapus anggota
    public function destroy($id)
    {
        // Mengambil anggota yang akan dihapus
        $anggota = Anggota::findOrFail($id);

        // Menghapus record anggota
        $anggota->delete();

        return redirect()->route('anggota.index')->with('success', 'Anggota berhasil dihapus');
    }
}
