<?php

namespace App\Http\Controllers;

use App\Models\MataPelajaran;
use Illuminate\Http\Request;

class MataPelajaranController extends Controller
{
    // Menampilkan semua mata pelajaran
    public function index()
    {
        $mataPelajarans = MataPelajaran::all();
        return view('mata-pelajaran.index', compact('mataPelajarans'));
    }

    // Menampilkan form untuk membuat mata pelajaran baru
    public function create()
    {
        return view('mata-pelajaran.create');
    }

    // Menyimpan data mata pelajaran baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_mapel' => 'required|string|max:255',
            'guru_mapel' => 'required|string|max:255',
        ]);

        MataPelajaran::create($request->all());

        return redirect()->route('mata-pelajaran.index')->with('success', 'Mata Pelajaran berhasil ditambahkan!');
    }

    // Menampilkan form untuk mengedit mata pelajaran
    public function edit(MataPelajaran $mataPelajaran)
    {
        return view('mata-pelajaran.edit', compact('mataPelajaran'));
    }

    // Memperbarui data mata pelajaran
    public function update(Request $request, MataPelajaran $mataPelajaran)
    {
        $request->validate([
            'nama_mapel' => 'required|string|max:255',
            'guru_mapel' => 'required|string|max:255',
        ]);

        $mataPelajaran->update($request->all());

        return redirect()->route('mata-pelajaran.index')->with('success', 'Mata Pelajaran berhasil diperbarui!');
    }

    // Menampilkan detail mata pelajaran
    public function show(MataPelajaran $mataPelajaran)
    {
        return view('mata-pelajaran.show', compact('mataPelajaran'));
    }

    // Menghapus mata pelajaran
    public function destroy(MataPelajaran $mataPelajaran)
    {
        $mataPelajaran->delete();

        return redirect()->route('mata-pelajaran.index')->with('success', 'Mata Pelajaran berhasil dihapus!');
    }
}
