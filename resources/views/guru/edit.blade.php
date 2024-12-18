@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg rounded-4">
                    <div class="card-header text-center bg-gradient-primary text-white">
                        <h3 class="display-5">Edit Data Guru</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('guru.update', $guru->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="kode_guru" class="form-label">Kode Guru</label>
                                <input type="text" class="form-control @error('kode_guru') is-invalid @enderror"
                                    id="kode_guru" name="kode_guru" value="{{ old('kode_guru', $guru->kode_guru) }}"
                                    required>
                                @error('kode_guru')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nama_guru" class="form-label">Nama Guru</label>
                                <input type="text" class="form-control @error('nama_guru') is-invalid @enderror"
                                    id="nama_guru" name="nama_guru" value="{{ old('nama_guru', $guru->nama_guru) }}"
                                    required>
                                @error('nama_guru')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="jabatan" class="form-label">Jabatan</label>
                                <input type="text" class="form-control @error('jabatan') is-invalid @enderror"
                                    id="jabatan" name="jabatan" value="{{ old('jabatan', $guru->jabatan) }}" required>
                                @error('jabatan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="mata_pelajaran" class="form-label">Mata Pelajaran</label>
                                <input type="text" class="form-control @error('mata_pelajaran') is-invalid @enderror"
                                    id="mata_pelajaran" name="mata_pelajaran"
                                    value="{{ old('mata_pelajaran', $guru->mata_pelajaran) }}" required>
                                @error('mata_pelajaran')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-lg btn-gradient-primary shadow-md w-100">
                                <i class="fas fa-save"></i> Perbarui Data
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tombol Kembali -->
        <div class="text-center mt-4">
            <a href="{{ route('guru.index') }}" class="btn kembali-btn">
                <i class="fas fa-arrow-left"></i> Kembali ke Daftar Guru
            </a>
        </div>
    </div>
@endsection

@section('css')
    <style>
        .btn-gradient-primary {
            background: linear-gradient(45deg, #4CAF50, #45a049);
            color: white;
            border-radius: 30px;
            padding: 12px 25px;
            font-size: 16px;
            font-weight: bold;
            text-transform: uppercase;
            transition: all 0.3s ease;
            display: inline-block;
            width: 100%;
        }

        .btn-gradient-primary:hover {
            background: linear-gradient(45deg, #45a049, #4CAF50);
            transform: translateY(-5px);
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.15);
        }

        .btn-gradient-primary:active {
            background: linear-gradient(45deg, #4CAF50, #45a049);
            transform: translateY(0);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .kembali-btn {
            background: linear-gradient(135deg, #f06, #ffcc00);
            color: white;
            padding: 15px 30px;
            border-radius: 50px;
            font-size: 16px;
            font-weight: bold;
            text-transform: uppercase;
            transition: all 0.3s ease;
        }

        .kembali-btn:hover {
            background: linear-gradient(135deg, #ffcc00, #f06);
            transform: translateY(-5px);
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.3);
        }

        .kembali-btn:active {
            transform: translateY(0);
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }

        .card {
            border-radius: 20px;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background: #4CAF50;
            color: white;
            font-size: 26px;
            padding: 20px;
            border-radius: 20px 20px 0 0;
            text-transform: uppercase;
        }

        .card-body {
            padding: 40px;
        }

        .form-label {
            font-weight: bold;
        }

        .fs-5 {
            font-size: 1.25rem;
        }

        .invalid-feedback {
            font-size: 0.875rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .card-body {
                padding: 20px;
            }

            .btn-gradient-primary {
                font-size: 16px;
                padding: 10px 20px;
            }

            .kembali-btn {
                padding: 12px 25px;
            }
        }
    </style>
@endsection
