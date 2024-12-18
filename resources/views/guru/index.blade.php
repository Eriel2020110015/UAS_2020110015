@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center my-4">Daftar Guru</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Tombol Kembali -->
        <a href="{{ route('home') }}" class="btn kembali-btn">
            Kembali
        </a>

        <div class="mb-3 text-end">
            <a href="{{ route('guru.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Tambah Data Guru
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>#</th>
                        <th>Kode Guru</th>
                        <th>Nama Guru</th>
                        <th>Jabatan</th>
                        <th>Mata Pelajaran</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($gurus as $guru)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $guru->kode_guru }}</td>
                            <td>{{ $guru->nama_guru }}</td>
                            <td>{{ $guru->jabatan }}</td>
                            <td>{{ $guru->mata_pelajaran }}</td>
                            <td class="d-flex justify-content-start">
                                <!-- Tombol Detail -->
                                <a href="{{ route('guru.show', $guru->id) }}" class="btn btn-info btn-sm me-2">
                                    <i class="fas fa-eye"></i> Detail
                                </a>

                                <!-- Tombol Edit -->
                                <a href="{{ route('guru.edit', $guru->id) }}" class="btn btn-warning btn-sm me-2">
                                    <i class="fas fa-pencil-alt"></i> Edit
                                </a>

                                <!-- Tombol Hapus -->
                                <form action="{{ route('guru.destroy', $guru->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin ingin menghapus data ini?')">
                                        <i class="fas fa-trash-alt"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('css')
    <style>
        /* Kustomisasi desain tabel agar lebih menarik */
        .table th,
        .table td {
            vertical-align: middle;
            text-align: center;
            padding: 12px 15px;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f9f9f9;
        }

        .table-hover tbody tr:hover {
            background-color: #f1f1f1;
        }

        .btn i {
            margin-right: 5px;
        }

        /* Tombol lebih konsisten */
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-warning {
            background-color: #ffc107;
            border-color: #ffc107;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-info {
            background-color: #17a2b8;
            border-color: #17a2b8;
        }

        /* Tampilan tombol saat hover */
        .btn-primary:hover,
        .btn-warning:hover,
        .btn-danger:hover,
        .btn-info:hover {
            opacity: 0.8;
        }

        /* Tombol Kembali */
        .kembali-btn {
            position: fixed;
            left: 20px;
            bottom: 20px;
            padding: 10px 20px;
            /* Ukuran padding yang lebih presisi */
            background: linear-gradient(135deg, #ff6b6b, #ffcc00);
            /* Gradasi menarik */
            color: white;
            border: none;
            border-radius: 50px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
            font-size: 14px;
            /* Ukuran font lebih kecil dan presisi */
            font-weight: bold;
            text-transform: uppercase;
            transition: all 0.3s ease;
        }

        .kembali-btn:hover {
            background: linear-gradient(135deg, #ffcc00, #ff6b6b);
            /* Gradasi terbalik saat hover */
            transform: translateY(-5px);
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.3);
            text-decoration: none;
        }

        .kembali-btn:active {
            transform: translateY(0);
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }

        /* Responsif untuk tampilan mobile */
        @media (max-width: 768px) {
            .table-responsive {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }

            .table th,
            .table td {
                font-size: 0.85rem;
                padding: 10px;
            }

            .btn {
                font-size: 0.75rem;
                padding: 8px 12px;
            }

            .kembali-btn {
                font-size: 12px;
                padding: 10px 20px;
            }
        }
    </style>
@endsection
