<?php

namespace App\Http\Controllers;

use App\Models\NilaiPelajaran;
use App\Models\Siswa;
use App\Models\MataPelajaran;
use Illuminate\Http\Request;

class NilaiPelajaranController extends Controller
{
    /**
     * Tampilkan daftar semua nilai pelajaran.
     */
    public function index()
    {
        $nilaiPelajarans = NilaiPelajaran::with(['siswa', 'mataPelajaran'])->get();
        return view('nilai_pelajaran.index', compact('nilaiPelajarans'));
    }

    /**
     * Tampilkan form untuk membuat nilai pelajaran baru.
     */
    public function create()
    {
        $siswas = Siswa::all(); // Ambil semua data siswa untuk dropdown
        $mataPelajarans = MataPelajaran::all(); // Ambil semua mata pelajaran
        return view('nilai_pelajaran.create', compact('siswas', 'mataPelajarans'));
    }

    /**
     * Simpan nilai pelajaran baru.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'siswa_id' => 'required|exists:siswas,id',
            'mata_pelajaran_id' => 'required|exists:mata_pelajarans,id',
            'nilai_tugas' => 'required|numeric|min:0|max:100',
            'nilai_ulangan' => 'required|numeric|min:0|max:100',
            'nilai_uts' => 'required|numeric|min:0|max:100',
            'nilai_uas' => 'required|numeric|min:0|max:100',
            'nilai_keterampilan' => 'required|numeric|min:0|max:100',
        ]);

        // Simpan data ke database
        NilaiPelajaran::create($request->all());

        return redirect()->route('nilai_pelajaran.index')
                         ->with('success', 'Nilai pelajaran berhasil ditambahkan.');
    }

    /**
     * Tampilkan form untuk mengedit nilai pelajaran.
     */
    public function edit($id)
    {
        $nilaiPelajaran = NilaiPelajaran::findOrFail($id);
        $siswas = Siswa::all(); // Untuk dropdown pilihan siswa
        $mataPelajarans = MataPelajaran::all(); // Untuk dropdown mata pelajaran
        return view('nilai_pelajaran.edit', compact('nilaiPelajaran', 'siswas', 'mataPelajarans'));
    }

    /**
     * Perbarui nilai pelajaran yang sudah ada.
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'siswa_id' => 'required|exists:siswas,id',
            'mata_pelajaran_id' => 'required|exists:mata_pelajarans,id',
            'nilai_tugas' => 'required|numeric|min:0|max:100',
            'nilai_ulangan' => 'required|numeric|min:0|max:100',
            'nilai_uts' => 'required|numeric|min:0|max:100',
            'nilai_uas' => 'required|numeric|min:0|max:100',
            'nilai_keterampilan' => 'required|numeric|min:0|max:100',
        ]);

        // Temukan data dan perbarui
        $nilaiPelajaran = NilaiPelajaran::findOrFail($id);
        $nilaiPelajaran->update($request->all());

        return redirect()->route('nilai_pelajaran.index')
                         ->with('success', 'Nilai pelajaran berhasil diperbarui.');
    }

    /**
     * Hapus nilai pelajaran.
     */
    public function destroy($id)
    {
        $nilaiPelajaran = NilaiPelajaran::findOrFail($id);
        $nilaiPelajaran->delete();

        return redirect()->route('nilai_pelajaran.index')
                         ->with('success', 'Nilai pelajaran berhasil dihapus.');
    }
}
