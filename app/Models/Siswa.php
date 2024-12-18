<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    // Tentukan tabel yang digunakan oleh model ini
    protected $table = 'siswas';

    // Tentukan atribut yang dapat diisi (fillable)
    protected $fillable = [
        'nis',
        'nama_siswa',
        'kelas',
        'alamat',
        'jenis_kelamin',
        'tanggal_lahir',
        'agama',
    ];

    /**
     * Relasi dengan model Kelas (jika diatur).
     * Misalnya, relasi antara Siswa dan Kelas.
     */
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas', 'nama_kelas');
    }
}
