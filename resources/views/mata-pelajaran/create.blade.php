@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="card shadow-lg rounded-4">
            <div class="card-header text-center bg-gradient-primary text-white">
                <h3>Tambah Mata Pelajaran</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('mata-pelajaran.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama_mapel" class="form-label">Nama Mata Pelajaran</label>
                        <input type="text" class="form-control" id="nama_mapel" name="nama_mapel" required>
                    </div>
                    <div class="mb-3">
                        <label for="guru_mapel" class="form-label">Guru Mata Pelajaran</label>
                        <input type="text" class="form-control" id="guru_mapel" name="guru_mapel" required>
                    </div>
                    <button type="submit" class="simpan-btn">Simpan</button>
                </form>
            </div>
        </div>

        <!-- Tombol Kembali -->
        <a href="{{ route('mata-pelajaran.index') }}" class="btn kembali-btn">Kembali</a>
    </div>
@endsection

@section('css')
    <style>
        /* Button for Save */
        .simpan-btn {
            background: linear-gradient(135deg, #4CAF50, #45a049);
            color: white;
            padding: 12px 25px;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 30px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            text-transform: uppercase;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-block;
            width: 100%;
        }

        .simpan-btn:hover {
            background: linear-gradient(135deg, #45a049, #4CAF50);
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .simpan-btn:active {
            background: linear-gradient(135deg, #4CAF50, #45a049);
            transform: translateY(0);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        /* Button Kembali */
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
    </style>
@endsection
