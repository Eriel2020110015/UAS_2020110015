<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Siswa;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    /**
     * Menampilkan daftar absensi.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $absensis = Absensi::with('siswa')->get(); // Mengambil data absensi beserta data siswa
        return view('absensi.index', compact('absensis'));
    }

    /**
     * Menampilkan form untuk menambah absensi.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswas = Siswa::all(); // Mengambil semua data siswa untuk pilihan
        return view('absensi.create', compact('siswas'));
    }

    /**
     * Menyimpan absensi yang baru dibuat.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'siswa_id' => 'required|exists:siswas,id', // Validasi siswa_id
            'tanggal' => 'required|date',
            'status' => 'required|string|in:hadir,izin,sakit,alfa', // Validasi status
        ]);

        Absensi::create($request->all()); // Menyimpan data absensi baru

        return redirect()->route('absensi.index')->with('success', 'Absensi berhasil ditambahkan');
    }

    /**
     * Menampilkan form untuk mengedit absensi.
     *
     * @param  \App\Models\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function edit(Absensi $absensi)
    {
        $siswas = Siswa::all(); // Mengambil semua data siswa untuk pilihan
        return view('absensi.edit', compact('absensi', 'siswas'));
    }

    /**
     * Mengupdate data absensi yang telah ada.
     *
     * @param \Illuminate\Http\Request $request
     * @param  \App\Models\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Absensi $absensi)
    {
        $request->validate([
            'siswa_id' => 'required|exists:siswas,id', // Validasi siswa_id
            'tanggal' => 'required|date',
            'status' => 'required|string|in:hadir,izin,sakit,alfa', // Validasi status
        ]);

        $absensi->update($request->all()); // Mengupdate data absensi

        return redirect()->route('absensi.index')->with('success', 'Absensi berhasil diperbarui');
    }

    /**
     * Menghapus absensi yang ada.
     *
     * @param  \App\Models\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Absensi $absensi)
    {
        $absensi->delete(); // Menghapus data absensi

        return redirect()->route('absensi.index')->with('success', 'Absensi berhasil dihapus');
    }
}
