<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Menampilkan daftar semua siswa berdasarkan kelas yang dipilih.
     */
    public function index(Request $request)
    {
        // Ambil parameter kelas dari request
        $kelas = $request->input('kelas');

        // Jika kelas dipilih, filter berdasarkan kelas
        if ($kelas) {
            // Query untuk mendapatkan siswa berdasarkan kelas yang dipilih
            $siswas = Siswa::where('kelas', 'like', '%'.$kelas.'%')->get();
        } else {
            // Jika tidak ada kelas yang dipilih, set siswas sebagai array kosong
            $siswas = [];
        }

        // Daftar kelas yang tersedia (kelas 10, 11, dan 12)
        $kelasOptions = ['10', '11', '12'];

        // Kirim data siswa dan daftar kelas ke view
        return view('siswa.index', compact('siswas', 'kelasOptions'));
    }

    /**
     * Menampilkan form untuk menambah siswa baru.
     */
    public function create()
    {
        // Menampilkan form untuk menambah siswa
        return view('siswa.create');
    }

    /**
     * Menyimpan data siswa baru.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nis' => 'required|unique:siswas',
            'nama_siswa' => 'required',
            'kelas' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required|date',
            'agama' => 'required',
        ]);

        // Menyimpan data siswa baru
        Siswa::create([
            'nis' => $request->nis,
            'nama_siswa' => $request->nama_siswa,
            'kelas' => $request->kelas,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
            'agama' => $request->agama,
        ]);

        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail data siswa.
     */
    public function show($id)
    {
        // Menampilkan detail siswa berdasarkan ID
        $siswa = Siswa::findOrFail($id);
        return view('siswa.show', compact('siswa'));
    }

    /**
     * Menampilkan form untuk mengedit data siswa.
     */
    public function edit($id)
    {
        // Mencari siswa berdasarkan ID
        $siswa = Siswa::findOrFail($id);

        // Menampilkan form edit dengan data siswa
        return view('siswa.edit', compact('siswa'));
    }

    /**
     * Memperbarui data siswa.
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nis' => 'required|unique:siswas,nis,'.$id,
            'nama_siswa' => 'required',
            'kelas' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required|date',
            'agama' => 'required',
        ]);

        // Mencari siswa berdasarkan ID
        $siswa = Siswa::findOrFail($id);

        // Memperbarui data siswa
        $siswa->update([
            'nis' => $request->nis,
            'nama_siswa' => $request->nama_siswa,
            'kelas' => $request->kelas,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
            'agama' => $request->agama,
        ]);

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil diperbarui.');
    }

    /**
     * Menghapus data siswa.
     */
    public function destroy($id)
    {
        // Mencari siswa berdasarkan ID dan menghapusnya
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil dihapus.');
    }
}
