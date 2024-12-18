@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Detail Kelas</h2>
        <table class="table">
            <tr>
                <th>Nama Kelas</th>
                <td>{{ $kela->nama_kelas }}</td>
            </tr>
            <tr>
                <th>Wali Kelas</th>
                <td>{{ $kela->wali_kelas }}</td>
            </tr>
        </table>
        <a href="{{ route('kelas.index') }}" class="btn btn-primary">Kembali</a>
    </div>
@endsection
