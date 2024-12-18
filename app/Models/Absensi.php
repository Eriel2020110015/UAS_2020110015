<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;

    // Tentukan tabel yang digunakan oleh model ini (opsional jika nama tabel mengikuti konvensi default)
    protected $table = 'absensis';

    // Tentukan atribut yang dapat diisi (fillable)
    protected $fillable = [
        'siswa_id',
        'tanggal',
        'status',
    ];

    /**
     * Relasi dengan model Siswa.
     * Satu absensi dimiliki oleh satu siswa.
     */
    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}
