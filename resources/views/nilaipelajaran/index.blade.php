@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Daftar Nilai Pelajaran</h2>
        <a href="{{ route('nilai_pelajaran.create') }}" class="btn btn-success mb-3">Tambah Nilai</a>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Siswa</th>
                    <th>Mata Pelajaran</th>
                    <th>Nilai Tugas</th>
                    <th>Nilai Ulangan</th>
                    <th>Nilai UTS</th>
                    <th>Nilai UAS</th>
                    <th>Nilai Keterampilan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($nilaiPelajarians as $nilai)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $nilai->siswa->nama }}</td>
                        <td>{{ $nilai->mataPelajaran->nama }}</td>
                        <td>{{ $nilai->nilai_tugas }}</td>
                        <td>{{ $nilai->nilai_ulangan }}</td>
                        <td>{{ $nilai->nilai_uts }}</td>
                        <td>{{ $nilai->nilai_uas }}</td>
                        <td>{{ $nilai->nilai_keterampilan }}</td>
                        <td>
                            <a href="{{ route('nilai_pelajaran.edit', $nilai->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('nilai_pelajaran.destroy', $nilai->id) }}" method="POST"
                                style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
