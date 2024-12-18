@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Daftar Nilai Kepribadian</h2>

        <a href="{{ route('nilai_kepribadian.create') }}" class="btn btn-success mb-3">Tambah Nilai Kepribadian</a>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Siswa</th>
                    <th>Sikap</th>
                    <th>Kerajinan</th>
                    <th>Kedisiplinan</th>
                    <th>Kebersihan</th>
                    <th>Kejujuran</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($nilaiKepribadians as $key => $nilai)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $nilai->siswa->nama }}</td>
                        <td>{{ $nilai->sikap }}</td>
                        <td>{{ $nilai->kerajinan }}</td>
                        <td>{{ $nilai->kedisiplinan }}</td>
                        <td>{{ $nilai->kebersihan }}</td>
                        <td>{{ $nilai->kejujuran }}</td>
                        <td>
                            <a href="{{ route('nilai_kepribadian.edit', $nilai->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('nilai_kepribadian.destroy', $nilai->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
