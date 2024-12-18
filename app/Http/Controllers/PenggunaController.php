<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PenggunaController extends Controller
{
    /**
     * Menampilkan daftar pengguna.
     */
    public function index()
    {
        $penggunas = Pengguna::all();
        return view('pengguna.index', compact('penggunas'));
    }

    /**
     * Menampilkan form untuk menambahkan pengguna baru.
     */
    public function create()
    {
        return view('pengguna.create');
    }

    /**
     * Menyimpan pengguna baru.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required|unique:penggunas',
            'password' => 'required|min:6',
        ]);

        // Menyimpan pengguna dengan password di-hash
        Pengguna::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('pengguna.index')->with('success', 'Pengguna berhasil ditambahkan.');
    }

    /**
     * Menampilkan form untuk mengedit data pengguna.
     */
    public function edit($id)
    {
        $pengguna = Pengguna::findOrFail($id);
        return view('pengguna.edit', compact('pengguna'));
    }

    /**
     * Memperbarui data pengguna.
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'username' => 'required|unique:penggunas,username,'.$id,
            'password' => 'nullable|min:6',
        ]);

        // Mengambil data pengguna yang akan diperbarui
        $pengguna = Pengguna::findOrFail($id);

        // Memperbarui username dan password (jika diberikan)
        $pengguna->username = $request->username;
        if ($request->password) {
            $pengguna->password = Hash::make($request->password);
        }
        $pengguna->save();

        return redirect()->route('pengguna.index')->with('success', 'Pengguna berhasil diperbarui.');
    }

    /**
     * Menghapus pengguna.
     */
    public function destroy($id)
    {
        $pengguna = Pengguna::findOrFail($id);
        $pengguna->delete();

        return redirect()->route('pengguna.index')->with('success', 'Pengguna berhasil dihapus.');
    }

    /**
     * Proses login pengguna.
     */
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'username' => 'Username atau password salah.',
        ]);
    }

    /**
     * Proses logout pengguna.
     */
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
