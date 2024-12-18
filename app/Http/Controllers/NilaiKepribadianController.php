<?php

namespace App\Http\Controllers;

use App\Models\NilaiKepribadian;
use App\Models\Siswa;
use Illuminate\Http\Request;

class NilaiKepribadianController extends Controller
{
    /**
     * Tampilkan daftar semua nilai kepribadian.
     */
    public function index()
    {
        $nilaiKepribadians = NilaiKepribadian::with('siswa')->get();
        return view('nilai_kepribadian.index', compact('nilaiKepribadians'));
    }

    /**
     * Tampilkan form untuk membuat nilai kepribadian baru.
     */
    public function create()
    {
        $siswas = Siswa::all(); // Ambil semua data siswa untuk dropdown
        return view('nilai_kepribadian.create', compact('siswas'));
    }

    /**
     * Simpan nilai kepribadian baru.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'siswa_id' => 'required|exists:siswas,id',
            'sikap' => 'required|integer|min:0|max:100',
            'kerajinan' => 'required|integer|min:0|max:100',
            'kedisiplinan' => 'required|integer|min:0|max:100',
            'kebersihan' => 'required|integer|min:0|max:100',
            'kejujuran' => 'required|integer|min:0|max:100',
        ]);

        // Simpan data ke database
        NilaiKepribadian::create($request->all());

        return redirect()->route('nilai_kepribadian.index')
                         ->with('success', 'Nilai kepribadian berhasil ditambahkan.');
    }

    /**
     * Tampilkan form untuk mengedit nilai kepribadian.
     */
    public function edit($id)
    {
        $nilaiKepribadian = NilaiKepribadian::findOrFail($id);
        $siswas = Siswa::all(); // Untuk dropdown pilihan siswa
        return view('nilai_kepribadian.edit', compact('nilaiKepribadian', 'siswas'));
    }

    /**
     * Perbarui nilai kepribadian yang sudah ada.
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'siswa_id' => 'required|exists:siswas,id',
            'sikap' => 'required|integer|min:0|max:100',
            'kerajinan' => 'required|integer|min:0|max:100',
            'kedisiplinan' => 'required|integer|min:0|max:100',
            'kebersihan' => 'required|integer|min:0|max:100',
            'kejujuran' => 'required|integer|min:0|max:100',
        ]);

        // Temukan data dan perbarui
        $nilaiKepribadian = NilaiKepribadian::findOrFail($id);
        $nilaiKepribadian->update($request->all());

        return redirect()->route('nilai_kepribadian.index')
                         ->with('success', 'Nilai kepribadian berhasil diperbarui.');
    }

    /**
     * Hapus nilai kepribadian.
     */
    public function destroy($id)
    {
        $nilaiKepribadian = NilaiKepribadian::findOrFail($id);
        $nilaiKepribadian->delete();

        return redirect()->route('nilai_kepribadian.index')
                         ->with('success', 'Nilai kepribadian berhasil dihapus.');
    }
}
