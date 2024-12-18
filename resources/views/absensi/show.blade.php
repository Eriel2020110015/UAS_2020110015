@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Detail Absensi</h2>

        <table class="table">
            <tr>
                <th>Nama Siswa</th>
                <td>{{ $absensi->siswa->nama_siswa }}</td>
            </tr>
            <tr>
                <th>Tanggal</th>
                <td>{{ $absensi->tanggal }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{ ucfirst($absensi->status) }}</td>
            </tr>
        </table>

        <a href="{{ route('absensi.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
@endsection
