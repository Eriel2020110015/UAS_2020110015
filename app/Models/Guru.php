<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    // Tentukan tabel yang digunakan oleh model ini (opsional jika nama tabel mengikuti konvensi default)
    protected $table = 'gurus';

    // Tentukan atribut yang dapat diisi (fillable)
    protected $fillable = [
        'kode_guru',
        'nama_guru',
        'jabatan',
        'mata_pelajaran',
    ];

    /**
     * Relasi dengan model lainnya (jika ada).
     * Misalnya, relasi antara Guru dan Mata Pelajaran.
     */
    public function mataPelajaran()
    {
        return $this->hasMany(MataPelajaran::class, 'guru_id', 'id');
    }
}
