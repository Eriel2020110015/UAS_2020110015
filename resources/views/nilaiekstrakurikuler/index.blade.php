@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Daftar Nilai Ekstrakurikuler</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('nilai_ekstrakurikuler.create') }}" class="btn btn-primary mb-3">Tambah Nilai Ekstrakurikuler</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Ekstrakurikuler</th>
                    <th>Siswa</th>
                    <th>Nilai</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($nilaiEkstrakurikulers as $index => $nilai)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $nilai->ekstrakurikuler->nama }}</td>
                        <td>{{ $nilai->siswa->nama }}</td>
                        <td>{{ $nilai->nilai }}</td>
                        <td>
                            <a href="{{ route('nilai_ekstrakurikuler.edit', $nilai->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('nilai_ekstrakurikuler.destroy', $nilai->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
