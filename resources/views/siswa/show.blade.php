@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <!-- Header Section -->
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg rounded-4">
                    <div class="card-header text-center bg-gradient-primary text-white">
                        <h3 class="display-5">Detail Siswa</h3>
                    </div>
                    <div class="card-body">
                        <!-- Card Content -->
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="p-4 border rounded-3 bg-light shadow-sm">
                                    <h4><i class="fas fa-user"></i> Nama Siswa</h4>
                                    <p class="fs-5 text-muted">{{ $siswa->nama_siswa }}</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="p-4 border rounded-3 bg-light shadow-sm">
                                    <h4><i class="fas fa-id-badge"></i> NIS</h4>
                                    <p class="fs-5 text-muted">{{ $siswa->nis }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="p-4 border rounded-3 bg-light shadow-sm">
                                    <h4><i class="fas fa-chalkboard"></i> Kelas</h4>
                                    <p class="fs-5 text-muted">{{ $siswa->kelas }}</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="p-4 border rounded-3 bg-light shadow-sm">
                                    <h4><i class="fas fa-home"></i> Alamat</h4>
                                    <p class="fs-5 text-muted">{{ $siswa->alamat }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="p-4 border rounded-3 bg-light shadow-sm">
                                    <h4><i class="fas fa-praying-hands"></i> Agama</h4>
                                    <p class="fs-5 text-muted">{{ $siswa->agama }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Action Section -->
                        <div class="text-center mt-4">
                            <a href="{{ route('siswa.index') }}" class="btn btn-lg btn-gradient-primary shadow-md">
                                <i class="fas fa-arrow-left"></i> Kembali
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Section -->
        <div class="row justify-content-center mt-5">
            <div class="col-md-8 text-center">
                <p class="text-muted">Eric Inzaghi Firdaus (Eriel) &copy; 2024 | Semua Hak Cipta Dilindungi</p>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <style>
        .btn-gradient-primary {
            background: linear-gradient(45deg, #ff4f85, #ffcc00);
            color: white;
            border-radius: 30px;
            padding: 12px 30px;
            font-size: 18px;
            font-weight: bold;
            text-transform: uppercase;
            transition: all 0.3s ease-in-out;
        }

        .btn-gradient-primary:hover {
            background: linear-gradient(45deg, #ffcc00, #ff4f85);
            transform: scale(1.05);
            box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.3);
        }

        .card {
            border-radius: 20px;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background: #ff4f85;
            color: white;
            font-size: 26px;
            padding: 20px;
            border-radius: 20px 20px 0 0;
            text-transform: uppercase;
        }

        .card-body {
            padding: 40px;
        }

        .border {
            border: 1px solid #ddd;
        }

        .shadow-sm {
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .bg-light {
            background-color: #f8f9fa !important;
        }

        .p-4 {
            padding: 2rem;
        }

        .fs-5 {
            font-size: 1.25rem;
        }

        .text-muted {
            color: #6c757d;
        }

        .row.justify-content-center {
            display: flex;
            justify-content: center;
        }

        .display-5 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #fff;
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

            .row.justify-content-center {
                margin-top: 40px;
            }
        }
    </style>
@endsection
