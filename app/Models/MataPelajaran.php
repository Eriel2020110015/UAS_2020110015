<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{
    use HasFactory;

    // Tentukan tabel yang digunakan oleh model ini
    protected $table = 'mata_pelajarans';

    // Tentukan atribut yang dapat diisi (fillable)
    protected $fillable = [
        'nama_mapel',
        'guru_mapel',
    ];

    /**
     * Relasi dengan model Guru (jika diperlukan).
     * Misalnya, relasi antara MataPelajaran dan Guru.
     */
    public function guru()
    {
        return $this->belongsTo(Guru::class, 'guru_mapel', 'kode_guru');
    }
}
