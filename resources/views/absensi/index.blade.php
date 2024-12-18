@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Daftar Absensi</h2>

        <a href="{{ route('absensi.create') }}" class="btn btn-primary mb-3">Tambah Absensi</a>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Siswa</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($absensis as $absensi)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $absensi->siswa->nama_siswa }}</td>
                        <td>{{ $absensi->tanggal }}</td>
                        <td>{{ ucfirst($absensi->status) }}</td>
                        <td>
                            <a href="{{ route('absensi.edit', $absensi->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('absensi.destroy', $absensi->id) }}" method="POST" style="display:inline;">
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
