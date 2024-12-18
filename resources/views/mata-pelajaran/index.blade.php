@extends('layouts.app')

@section('title', 'Daftar Mata Pelajaran')

@section('content')
    <div class="container">
        <h3>Daftar Mata Pelajaran</h3>

        <a href="{{ route('mata-pelajaran.create') }}" class="btn btn-success mb-3">Tambah Mata Pelajaran</a>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Mata Pelajaran</th>
                    <th>Guru Mata Pelajaran</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mataPelajarans as $key => $item)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $item->nama_mapel }}</td>
                        <td>{{ $item->guru_mapel }}</td>
                        <td>
                            <a href="{{ route('mata-pelajaran.show', $item->id) }}" class="btn btn-warning btn-sm">Detail</a>
                            <a href="{{ route('mata-pelajaran.edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('mata-pelajaran.destroy', $item->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin ingin menghapus?');">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Tombol Kembali -->
    <a href="{{ route('home') }}" class="btn kembali-btn">Kembali</a>
@endsection

@section('css')
    <style>
        .kembali-btn {
            position: fixed;
            left: 20px;
            bottom: 20px;
            padding: 15px 30px;
            background: linear-gradient(135deg, #f06, #ffcc00);
            color: white;
            border: none;
            border-radius: 50px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
            font-size: 16px;
            font-weight: bold;
            text-transform: uppercase;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .kembali-btn:hover {
            background: linear-gradient(135deg, #ffcc00, #f06);
            transform: translateY(-5px);
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.3);
            text-decoration: none;
        }

        .kembali-btn:active {
            transform: translateY(0);
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }

        .kembali-btn i {
            margin-right: 8px;
        }
    </style>
@endsection
