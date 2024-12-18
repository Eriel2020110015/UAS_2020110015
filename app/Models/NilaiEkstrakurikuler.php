<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiEkstrakurikuler extends Model
{
    use HasFactory;

    // Tentukan tabel yang digunakan oleh model ini
    protected $table = 'nilai_ekstrakurikulers';

    // Tentukan atribut yang dapat diisi (fillable)
    protected $fillable = [
        'ekstrakurikuler_id',
        'siswa_id',
        'nilai',
    ];

    /**
     * Relasi dengan model Ekstrakurikuler dan Siswa.
     * - NilaiEkstrakurikuler milik seorang siswa.
     * - NilaiEkstrakurikuler untuk sebuah ekstrakurikuler.
     */

    public function ekstrakurikuler()
    {
        return $this->belongsTo(Ekstrakurikuler::class);
    }

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}
