@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header text-center">
                <h3>Edit Data Siswa</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="nama_siswa" class="form-label">Nama Siswa</label>
                        <input type="text" class="form-control" id="nama_siswa" name="nama_siswa"
                            value="{{ $siswa->nama_siswa }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="nis" class="form-label">NIS</label>
                        <input type="text" class="form-control" id="nis" name="nis" value="{{ $siswa->nis }}"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <input type="text" class="form-control" id="kelas" name="kelas" value="{{ $siswa->kelas }}"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3" required>{{ $siswa->alamat }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="agama" class="form-label">Agama</label>
                        <input type="text" class="form-control" id="agama" name="agama" value="{{ $siswa->agama }}"
                            required>
                    </div>
                    <button type="submit" class="simpan-btn">Update</button>
                </form>
            </div>
        </div>

        <!-- Tombol Kembali -->
        <a href="{{ route('siswa.index') }}" class="btn kembali-btn">Kembali</a>
    </div>
@endsection

@section('css')
    <style>
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
