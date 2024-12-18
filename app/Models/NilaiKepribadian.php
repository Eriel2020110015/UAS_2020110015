<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiKepribadian extends Model
{
    use HasFactory;

    // Tentukan tabel yang digunakan oleh model ini
    protected $table = 'nilai_kepribadians';

    // Tentukan atribut yang dapat diisi (fillable)
    protected $fillable = [
        'siswa_id',
        'sikap',
        'kerajinan',
        'kedisiplinan',
        'kebersihan',
        'kejujuran',
    ];

    /**
     * Relasi dengan model Siswa.
     * - NilaiKepribadian milik seorang siswa.
     */

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}
