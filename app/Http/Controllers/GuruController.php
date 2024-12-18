<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    // Konstruktor untuk middleware auth
    public function __construct()
    {
        $this->middleware('auth'); // Menjamin hanya pengguna yang terautentikasi yang dapat mengakses controller ini
    }

    // Menampilkan daftar semua guru
    public function index()
    {
        // Mengambil semua data guru dari database
        $gurus = Guru::all();
        
        // Mengirim data guru ke view 'guru.index'
        return view('guru.index', compact('gurus'));
    }

    // Menampilkan form untuk menambahkan guru baru
    public function create()
    {
        // Menampilkan form untuk menambah guru
        return view('guru.create');
    }

    // Menyimpan data guru yang baru ditambahkan
    public function store(Request $request)
    {
        // Validasi input yang diterima dari form
        $request->validate([
            'kode_guru' => 'required|unique:gurus',
            'nama_guru' => 'required',
            'jabatan' => 'required',
            'mata_pelajaran' => 'required',
        ]);

        // Menyimpan data guru baru
        Guru::create($request->all());

        // Redirect ke halaman daftar guru dengan pesan sukses
        return redirect()->route('guru.index')->with('success', 'Data guru berhasil ditambahkan.');
    }

    // Menampilkan form untuk mengedit data guru
    public function edit($id)
    {
        // Mencari guru berdasarkan ID
        $guru = Guru::findOrFail($id);
        
        // Menampilkan form untuk mengedit data guru
        return view('guru.edit', compact('guru'));
    }

    // Menyimpan perubahan data guru
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'kode_guru' => 'required|unique:gurus,kode_guru,' . $id,
            'nama_guru' => 'required',
            'jabatan' => 'required',
            'mata_pelajaran' => 'required',
        ]);

        // Mencari guru berdasarkan ID dan memperbarui data
        $guru = Guru::findOrFail($id);
        $guru->update($request->all());

        // Redirect ke halaman daftar guru dengan pesan sukses
        return redirect()->route('guru.index')->with('success', 'Data guru berhasil diperbarui.');
    }

    // Menghapus data guru
    public function destroy($id)
    {
        // Mencari guru berdasarkan ID dan menghapusnya
        $guru = Guru::findOrFail($id);
        $guru->delete();

        // Redirect ke halaman daftar guru dengan pesan sukses
        return redirect()->route('guru.index')->with('success', 'Data guru berhasil dihapus.');
    }

    // Menampilkan detail guru
    public function show($id)
    {
        // Mencari guru berdasarkan ID
        $guru = Guru::findOrFail($id);
        
        // Menampilkan halaman show dengan data guru yang ditemukan
        return view('guru.show', compact('guru'));
    }
}
