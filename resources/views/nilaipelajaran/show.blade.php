@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Detail Nilai Pelajaran</h2>

        <div class="mb-3">
            <label for="siswa" class="form-label"><strong>Siswa</strong></label>
            <p>{{ $nilaiPelajaran->siswa->nama }}</p>
        </div>

        <div class="mb-3">
            <label for="mata_pelajaran" class="form-label"><strong>Mata Pelajaran</strong></label>
            <p>{{ $nilaiPelajaran->mataPelajaran->nama }}</p>
        </div>

        <div class="mb-3">
            <label for="nilai_tugas" class="form-label"><strong>Nilai Tugas</strong></label>
            <p>{{ $nilaiPelajaran->nilai_tugas }}</p>
        </div>

        <div class="mb-3">
            <label for="nilai_ulangan" class="form-label"><strong>Nilai Ulangan</strong></label>
            <p>{{ $nilaiPelajaran->nilai_ulangan }}</p>
        </div>

        <div class="mb-3">
            <label for="nilai_uts" class="form-label"><strong>Nilai UTS</strong></label>
            <p>{{ $nilaiPelajaran->nilai_uts }}</p>
        </div>

        <div class="mb-3">
            <label for="nilai_uas" class="form-label"><strong>Nilai UAS</strong></label>
            <p>{{ $nilaiPelajaran->nilai_uas }}</p>
        </div>

        <div class="mb-3">
            <label for="nilai_keterampilan" class="form-label"><strong>Nilai Keterampilan</strong></label>
            <p>{{ $nilaiPelajaran->nilai_keterampilan }}</p>
        </div>

        <a href="{{ route('nilai_pelajaran.index') }}" class="btn btn-secondary">Kembali ke Daftar Nilai</a>
    </div>
@endsection
