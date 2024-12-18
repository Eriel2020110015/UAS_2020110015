@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Kelas</h2>
        <form action="{{ route('kelas.update', $kela->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama_kelas" class="form-label">Nama Kelas</label>
                <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" value="{{ $kela->nama_kelas }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="wali_kelas" class="form-label">Wali Kelas</label>
                <input type="text" class="form-control" id="wali_kelas" name="wali_kelas" value="{{ $kela->wali_kelas }}"
                    required>
            </div>
            <button type="submit" class="btn btn-warning">Perbarui</button>
        </form>
    </div>
@endsection
