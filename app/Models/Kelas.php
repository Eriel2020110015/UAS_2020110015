<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    // Tentukan tabel yang digunakan oleh model ini
    protected $table = 'kelas';

    // Tentukan atribut yang dapat diisi (fillable)
    protected $fillable = [
        'nama_kelas',
        'wali_kelas',
    ];

    /**
     * Relasi dengan model lainnya (jika ada).
     * Misalnya, relasi antara Kelas dan Siswa.
     */
    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'kelas_id', 'id');
    }
}
