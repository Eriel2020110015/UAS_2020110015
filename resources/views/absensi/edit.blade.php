@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Absensi</h2>

        <form action="{{ route('absensi.update', $absensi->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="siswa_id">Nama Siswa</label>
                <select name="siswa_id" id="siswa_id" class="form-control @error('siswa_id') is-invalid @enderror">
                    <option value="">Pilih Siswa</option>
                    @foreach ($siswas as $siswa)
                        <option value="{{ $siswa->id }}" {{ $absensi->siswa_id == $siswa->id ? 'selected' : '' }}>
                            {{ $siswa->nama_siswa }} ({{ $siswa->nis }})
                        </option>
                    @endforeach
                </select>
                @error('siswa_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" name="tanggal" id="tanggal"
                    class="form-control @error('tanggal') is-invalid @enderror"
                    value="{{ old('tanggal', $absensi->tanggal) }}">
                @error('tanggal')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
                    <option value="hadir" {{ $absensi->status == 'hadir' ? 'selected' : '' }}>Hadir</option>
                    <option value="izin" {{ $absensi->status == 'izin' ? 'selected' : '' }}>Izin</option>
                    <option value="sakit" {{ $absensi->status == 'sakit' ? 'selected' : '' }}>Sakit</option>
                    <option value="alfa" {{ $absensi->status == 'alfa' ? 'selected' : '' }}>Alfa</option>
                </select>
                @error('status')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Perbarui</button>
        </form>
    </div>
@endsection
