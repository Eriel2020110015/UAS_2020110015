<?php

namespace App\Http\Controllers;

use App\Models\NilaiEkstrakurikuler;
use App\Models\Ekstrakurikuler;
use App\Models\Siswa;
use Illuminate\Http\Request;

class NilaiEkstrakurikulerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua data nilai ekstrakurikuler beserta relasinya
        $nilaiEkstrakurikulers = NilaiEkstrakurikuler::with(['ekstrakurikuler', 'siswa'])->get();

        // Menampilkan view 'nilai_ekstrakurikuler.index' dengan data nilai ekstrakurikuler
        return view('nilai_ekstrakurikuler.index', compact('nilaiEkstrakurikulers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Mengambil daftar ekstrakurikuler dan siswa untuk pilihan input
        $ekstrakurikulers = Ekstrakurikuler::all();
        $siswas = Siswa::all();

        // Menampilkan form untuk menambahkan nilai ekstrakurikuler baru
        return view('nilai_ekstrakurikuler.create', compact('ekstrakurikulers', 'siswas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'ekstrakurikuler_id' => 'required|exists:ekstrakurikulers,id',
            'siswa_id' => 'required|exists:siswas,id',
            'nilai' => 'required|numeric|between:0,100',
        ]);

        // Simpan data nilai ekstrakurikuler baru ke dalam database
        NilaiEkstrakurikuler::create($request->all());

        // Redirect ke halaman index nilai ekstrakurikuler dengan pesan sukses
        return redirect()->route('nilai_ekstrakurikuler.index')->with('success', 'Nilai ekstrakurikuler berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(NilaiEkstrakurikuler $nilaiEkstrakurikuler)
    {
        // Menampilkan detail nilai ekstrakurikuler tertentu
        return view('nilai_ekstrakurikuler.show', compact('nilaiEkstrakurikuler'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NilaiEkstrakurikuler $nilaiEkstrakurikuler)
    {
        // Mengambil daftar ekstrakurikuler dan siswa untuk pilihan edit
        $ekstrakurikulers = Ekstrakurikuler::all();
        $siswas = Siswa::all();

        // Menampilkan form untuk mengedit nilai ekstrakurikuler tertentu
        return view('nilai_ekstrakurikuler.edit', compact('nilaiEkstrakurikuler', 'ekstrakurikulers', 'siswas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NilaiEkstrakurikuler $nilaiEkstrakurikuler)
    {
        // Validasi data input
        $request->validate([
            'ekstrakurikuler_id' => 'required|exists:ekstrakurikulers,id',
            'siswa_id' => 'required|exists:siswas,id',
            'nilai' => 'required|numeric|between:0,100',
        ]);

        // Update data nilai ekstrakurikuler
        $nilaiEkstrakurikuler->update($request->all());

        // Redirect ke halaman index nilai ekstrakurikuler dengan pesan sukses
        return redirect()->route('nilai_ekstrakurikuler.index')->with('success', 'Nilai ekstrakurikuler berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NilaiEkstrakurikuler $nilaiEkstrakurikuler)
    {
        // Hapus data nilai ekstrakurikuler dari database
        $nilaiEkstrakurikuler->delete();

        // Redirect ke halaman index nilai ekstrakurikuler dengan pesan sukses
        return redirect()->route('nilai_ekstrakurikuler.index')->with('success', 'Nilai ekstrakurikuler berhasil dihapus.');
    }
}
