<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekstrakurikuler extends Model
{
    use HasFactory;

    // Tentukan tabel yang digunakan oleh model ini (opsional jika nama tabel mengikuti konvensi default)
    protected $table = 'ekstrakurikulers';

    // Tentukan atribut yang dapat diisi (fillable)
    protected $fillable = [
        'nama_ekskul',
        'pembina',
    ];

    /**
     * Relasi dengan model lainnya (jika ada).
     * Contohnya: Jika ada relasi dengan model Siswa untuk mengikuti kegiatan ekskul.
     */
    public function siswa()
    {
        return $this->belongsToMany(Siswa::class, 'ekskul_siswa', 'ekstrakurikuler_id', 'siswa_id');
    }
}
