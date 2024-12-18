@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Data Ekstrakurikuler</h3>

        <a href="{{ route('ekstrakurikuler.create') }}" class="btn btn-success mb-3">Tambah Ekstrakurikuler</a>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Ekstrakurikuler</th>
                    <th>Pembina</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ekskul as $key => $item)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $item->nama_ekskul }}</td>
                        <td>{{ $item->pembina }}</td>
                        <td>
                            <a href="{{ route('ekstrakurikuler.show', $item->id) }}" class="btn btn-warning btn-sm">Detail</a>
                            <a href="{{ route('ekstrakurikuler.edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('ekstrakurikuler.destroy', $item->id) }}" method="POST"
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
            /* Mengubah posisi tombol ke kiri */
            bottom: 20px;
            padding: 15px 30px;
            /* Ukuran padding lebih besar */
            background: linear-gradient(135deg, #f06, #ffcc00);
            /* Gradasi yang sama dengan kode kedua */
            color: white;
            border: none;
            border-radius: 50px;
            /* Membuat tombol lebih bulat */
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
            /* Menambahkan bayangan untuk efek hover */
            font-size: 16px;
            /* Ukuran font yang lebih besar */
            font-weight: bold;
            text-transform: uppercase;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .kembali-btn:hover {
            background: linear-gradient(135deg, #ffcc00, #f06);
            /* Gradasi terbalik saat hover */
            transform: translateY(-5px);
            /* Efek sedikit terangkat */
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.3);
            /* Efek bayangan lebih kuat saat hover */
            text-decoration: none;
        }

        .kembali-btn:active {
            transform: translateY(0);
            /* Menurunkan efek transformasi saat tombol ditekan */
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            /* Menyesuaikan bayangan saat ditekan */
        }

        .kembali-btn i {
            margin-right: 8px;
            /* Menambahkan jarak antara ikon dan teks */
        }
    </style>
@endsection
