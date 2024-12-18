@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Data Guru</h1>

        <form action="{{ route('guru.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="kode_guru">Kode Guru</label>
                <input type="text" class="form-control @error('kode_guru') is-invalid @enderror" id="kode_guru"
                    name="kode_guru" value="{{ old('kode_guru') }}" required>
                @error('kode_guru')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="nama_guru">Nama Guru</label>
                <input type="text" class="form-control @error('nama_guru') is-invalid @enderror" id="nama_guru"
                    name="nama_guru" value="{{ old('nama_guru') }}" required>
                @error('nama_guru')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="jabatan">Jabatan</label>
                <input type="text" class="form-control @error('jabatan') is-invalid @enderror" id="jabatan"
                    name="jabatan" value="{{ old('jabatan') }}" required>
                @error('jabatan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="mata_pelajaran">Mata Pelajaran</label>
                <input type="text" class="form-control @error('mata_pelajaran') is-invalid @enderror" id="mata_pelajaran"
                    name="mata_pelajaran" value="{{ old('mata_pelajaran') }}" required>
                @error('mata_pelajaran')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
