@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Tambah Nilai Kepribadian</h2>

        <form action="{{ route('nilai_kepribadian.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="siswa_id">Siswa</label>
                <select name="siswa_id" id="siswa_id" class="form-control" required>
                    <option value="">Pilih Siswa</option>
                    @foreach ($siswas as $siswa)
                        <option value="{{ $siswa->id }}" {{ old('siswa_id') == $siswa->id ? 'selected' : '' }}>
                            {{ $siswa->nama }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="sikap">Sikap</label>
                <input type="number" name="sikap" id="sikap" class="form-control" value="{{ old('sikap') }}"
                    min="0" max="100" required>
            </div>

            <div class="form-group">
                <label for="kerajinan">Kerajinan</label>
                <input type="number" name="kerajinan" id="kerajinan" class="form-control" value="{{ old('kerajinan') }}"
                    min="0" max="100" required>
            </div>

            <div class="form-group">
                <label for="kedisiplinan">Kedisiplinan</label>
                <input type="number" name="kedisiplinan" id="kedisiplinan" class="form-control"
                    value="{{ old('kedisiplinan') }}" min="0" max="100" required>
            </div>

            <div class="form-group">
                <label for="kebersihan">Kebersihan</label>
                <input type="number" name="kebersihan" id="kebersihan" class="form-control" value="{{ old('kebersihan') }}"
                    min="0" max="100" required>
            </div>

            <div class="form-group">
                <label for="kejujuran">Kejujuran</label>
                <input type="number" name="kejujuran" id="kejujuran" class="form-control" value="{{ old('kejujuran') }}"
                    min="0" max="100" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
