@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Detail Nilai Ekstrakurikuler</h2>
        <div class="card">
            <div class="card-body">
                <p><strong>Ekstrakurikuler:</strong> {{ $nilaiEkstrakurikuler->ekstrakurikuler->nama }}</p>
                <p><strong>Siswa:</strong> {{ $nilaiEkstrakurikuler->siswa->nama }}</p>
                <p><strong>Nilai:</strong> {{ $nilaiEkstrakurikuler->nilai }}</p>
            </div>
        </div>

        <a href="{{ route('nilai_ekstrakurikuler.index') }}" class="btn btn-secondary mt-3">Kembali</a>
    </div>
@endsection
