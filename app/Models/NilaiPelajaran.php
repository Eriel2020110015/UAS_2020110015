<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiPelajaran extends Model
{
    use HasFactory;

    // Tentukan tabel yang digunakan oleh model ini
    protected $table = 'nilai_pelajarans';

    // Tentukan atribut yang dapat diisi (fillable)
    protected $fillable = [
        'nilai_tugas',
        'nilai_ulangan',
        'nilai_uts',
        'nilai_uas',
        'nilai_keterampilan',
    ];

    /**
     * Relasi dengan model Siswa dan MataPelajaran (jika diperlukan).
     * Contoh: 
     * - NilaiPelajaran milik seorang siswa.
     * - NilaiPelajaran untuk sebuah mata pelajaran.
     */

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }

    public function mataPelajaran()
    {
        return $this->belongsTo(MataPelajaran::class);
    }
}
