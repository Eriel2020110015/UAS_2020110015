@extends('layouts.app')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-center">Data Siswa</h3>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success text-center mb-4">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form method="GET" action="{{ route('siswa.index') }}" class="mb-4">
                            <div class="row">
                                <div class="col-md-4">
                                    <select name="kelas" class="form-control">
                                        <option value="">-- Pilih Kelas --</option>
                                        @foreach ($kelasOptions as $kelasOption)
                                            <option value="{{ $kelasOption }}"
                                                {{ request('kelas') == $kelasOption ? 'selected' : '' }}>
                                                Kelas {{ $kelasOption }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Tampilkan</button>
                                </div>
                            </div>
                        </form>

                        <div class="d-flex justify-content-start mb-4">
                            <a href="{{ route('siswa.create') }}" class="btn btn-success btn-lg">
                                <i class="fas fa-plus-circle"></i> Tambah Siswa
                            </a>
                        </div>

                        @if (count($siswas) > 0)
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>NIS</th>
                                            <th>Nama Siswa</th>
                                            <th>Kelas</th>
                                            <th>Alamat</th>
                                            <th>Agama</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($siswas as $siswa)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $siswa->nis }}</td>
                                                <td>{{ $siswa->nama_siswa }}</td>
                                                <td>{{ $siswa->kelas }}</td>
                                                <td>{{ $siswa->alamat }}</td>
                                                <td>{{ $siswa->agama }}</td>
                                                <td>
                                                    <a href="{{ route('siswa.edit', $siswa->id) }}"
                                                        class="btn btn-warning btn-sm">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </a>
                                                    <a href="{{ route('siswa.show', $siswa->id) }}"
                                                        class="btn btn-info btn-sm">
                                                        <i class="fas fa-eye"></i> Lihat
                                                    </a>
                                                    <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST"
                                                        style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm">
                                                            <i class="fas fa-trash"></i> Hapus
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div class="alert alert-warning text-center">
                                Tidak ada siswa yang ditemukan untuk kelas yang dipilih.
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Tombol Kembali -->
                <a href="{{ route('home') }}" class="btn kembali-btn">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <style>
        .kembali-btn {
            position: fixed;
            left: 20px;
            /* Mengubah posisi tombol ke kiri */
            bottom: 20px;
            padding: 12px 25px;
            background: linear-gradient(135deg, #007bff, #0056b3);
            /* Gradasi biru */
            color: white;
            border: none;
            border-radius: 30px;
            font-size: 14px;
            font-weight: bold;
            text-transform: uppercase;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            text-align: center;
            z-index: 1000;
            transition: all 0.3s ease;
        }

        .kembali-btn:hover {
            background: linear-gradient(135deg, #0056b3, #007bff);
            /* Gradasi terbalik */
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
            text-decoration: none;
        }

        .kembali-btn i {
            margin-right: 8px;
        }
    </style>
@endsection
