@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Detail Nilai Kepribadian</h2>

        <table class="table table-bordered">
            <tr>
                <th>Siswa</th>
                <td>{{ $nilaiKepribadian->siswa->nama }}</td>
            </tr>
            <tr>
                <th>Sikap</th>
                <td>{{ $nilaiKepribadian->sikap }}</td>
            </tr>
            <tr>
                <th>Kerajinan</th>
                <td>{{ $nilaiKepribadian->kerajinan }}</td>
            </tr>
            <tr>
                <th>Kedisiplinan</th>
                <td>{{ $nilaiKepribadian->kedisiplinan }}</td>
            </tr>
            <tr>
                <th>Kebersihan</th>
                <td>{{ $nilaiKepribadian->kebersihan }}</td>
            </tr>
            <tr>
                <th>Kejujuran</th>
                <td>{{ $nilaiKepribadian->kejujuran }}</td>
            </tr>
        </table>

        <a href="{{ route('nilai_kepribadian.index') }}" class="btn btn-primary">Kembali ke Daftar</a>
    </div>
@endsection
