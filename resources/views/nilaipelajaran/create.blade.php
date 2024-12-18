@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Tambah Nilai Pelajaran</h2>
        <form action="{{ route('nilai_pelajaran.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="siswa_id" class="form-label">Siswa</label>
                <select name="siswa_id" id="siswa_id" class="form-control @error('siswa_id') is-invalid @enderror">
                    <option value="">Pilih Siswa</option>
                    @foreach ($siswas as $siswa)
                        <option value="{{ $siswa->id }}" {{ old('siswa_id') == $siswa->id ? 'selected' : '' }}>
                            {{ $siswa->nama }}</option>
                    @endforeach
                </select>
                @error('siswa_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="mata_pelajaran_id" class="form-label">Mata Pelajaran</label>
                <select name="mata_pelajaran_id" id="mata_pelajaran_id"
                    class="form-control @error('mata_pelajaran_id') is-invalid @enderror">
                    <option value="">Pilih Mata Pelajaran</option>
                    @foreach ($mataPelajarans as $mataPelajaran)
                        <option value="{{ $mataPelajaran->id }}"
                            {{ old('mata_pelajaran_id') == $mataPelajaran->id ? 'selected' : '' }}>
                            {{ $mataPelajaran->nama }}</option>
                    @endforeach
                </select>
                @error('mata_pelajaran_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="nilai_tugas" class="form-label">Nilai Tugas</label>
                <input type="number" name="nilai_tugas" id="nilai_tugas"
                    class="form-control @error('nilai_tugas') is-invalid @enderror" value="{{ old('nilai_tugas') }}"
                    min="0" max="100">
                @error('nilai_tugas')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="nilai_ulangan" class="form-label">Nilai Ulangan</label>
                <input type="number" name="nilai_ulangan" id="nilai_ulangan"
                    class="form-control @error('nilai_ulangan') is-invalid @enderror" value="{{ old('nilai_ulangan') }}"
                    min="0" max="100">
                @error('nilai_ulangan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="nilai_uts" class="form-label">Nilai UTS</label>
                <input type="number" name="nilai_uts" id="nilai_uts"
                    class="form-control @error('nilai_uts') is-invalid @enderror" value="{{ old('nilai_uts') }}"
                    min="0" max="100">
                @error('nilai_uts')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="nilai_uas" class="form-label">Nilai UAS</label>
                <input type="number" name="nilai_uas" id="nilai_uas"
                    class="form-control @error('nilai_uas') is-invalid @enderror" value="{{ old('nilai_uas') }}"
                    min="0" max="100">
                @error('nilai_uas')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="nilai_keterampilan" class="form-label">Nilai Keterampilan</label>
                <input type="number" name="nilai_keterampilan" id="nilai_keterampilan"
                    class="form-control @error('nilai_keterampilan') is-invalid @enderror"
                    value="{{ old('nilai_keterampilan') }}" min="0" max="100">
                @error('nilai_keterampilan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
