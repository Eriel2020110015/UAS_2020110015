@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Ubah Nilai Ekstrakurikuler</h2>
        <form action="{{ route('nilai_ekstrakurikuler.update', $nilaiEkstrakurikuler->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="ekstrakurikuler_id">Ekstrakurikuler</label>
                <select name="ekstrakurikuler_id" id="ekstrakurikuler_id" class="form-control" required>
                    <option value="">Pilih Ekstrakurikuler</option>
                    @foreach ($ekstrakurikulers as $ekstrakurikuler)
                        <option value="{{ $ekstrakurikuler->id }}"
                            {{ $nilaiEkstrakurikuler->ekstrakurikuler_id == $ekstrakurikuler->id ? 'selected' : '' }}>
                            {{ $ekstrakurikuler->nama }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="siswa_id">Siswa</label>
                <select name="siswa_id" id="siswa_id" class="form-control" required>
                    <option value="">Pilih Siswa</option>
                    @foreach ($siswas as $siswa)
                        <option value="{{ $siswa->id }}"
                            {{ $nilaiEkstrakurikuler->siswa_id == $siswa->id ? 'selected' : '' }}>
                            {{ $siswa->nama }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="nilai">Nilai</label>
                <input type="number" name="nilai" id="nilai" class="form-control" required min="0"
                    max="100" step="0.01" value="{{ $nilaiEkstrakurikuler->nilai }}">
            </div>

            <button type="submit" class="btn btn-primary">Perbarui</button>
        </form>
    </div>
@endsection
