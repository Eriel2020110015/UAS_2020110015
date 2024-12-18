<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakurikuler;
use Illuminate\Http\Request;

class EkstrakurikulerController extends Controller
{
    // Menampilkan semua data ekstrakurikuler
    public function index()
    {
        $ekskul = Ekstrakurikuler::all();
        return view('ekstrakurikuler.index', compact('ekskul'));
    }

    // Menampilkan form tambah data
    public function create()
    {
        return view('ekstrakurikuler.create');
    }

    // Menyimpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_ekskul' => 'required|string|max:255',
            'pembina' => 'required|string|max:255',
        ]);

        Ekstrakurikuler::create($request->all());
        return redirect()->route('ekstrakurikuler.index')->with('success', 'Data berhasil ditambahkan!');
    }

    // Menampilkan detail data
    public function show($id)
    {
        $ekskul = Ekstrakurikuler::findOrFail($id);
        return view('ekstrakurikuler.show', compact('ekskul'));
    }

    // Menampilkan form edit data
    public function edit($id)
    {
        $ekskul = Ekstrakurikuler::findOrFail($id);
        return view('ekstrakurikuler.edit', compact('ekskul'));
    }

    // Mengupdate data
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_ekskul' => 'required|string|max:255',
            'pembina' => 'required|string|max:255',
        ]);

        $ekskul = Ekstrakurikuler::findOrFail($id);
        $ekskul->update($request->all());
        return redirect()->route('ekstrakurikuler.index')->with('success', 'Data berhasil diperbarui!');
    }

    // Menghapus data
    public function destroy($id)
    {
        $ekskul = Ekstrakurikuler::findOrFail($id);
        $ekskul->delete();
        return redirect()->route('ekstrakurikuler.index')->with('success', 'Data berhasil dihapus!');
    }
}
