<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- AdminLTE CSS -->
    <link href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <!-- Tambahkan CSS tambahan jika diperlukan -->
    @yield('css') <!-- Untuk menambahkan CSS khusus pada halaman tertentu -->

    <style>
        /* Navbar Styling */
        .navbar {
            background-color: #ff4f85;
            border-bottom: 2px solid #fff;
        }

        .brand-link {
            background-color: #ff4f85;
            color: white;
            text-align: center;
            font-weight: bold;
        }

        .brand-link i {
            color: white;
        }

        .nav-link {
            color: #ffffff !important;
            font-weight: 500;
            text-transform: uppercase;
        }

        .nav-link:hover {
            background-color: #f06292 !important;
            border-radius: 10px;
            transition: background-color 0.3s;
        }

        .nav-link.logout:hover {
            background-color: #ff4f85 !important;
            color: white;
        }

        /* Content Styling */
        .content-wrapper {
            background-color: #f4f6f9 !important;
            padding: 30px;
            border-radius: 8px;
            transition: padding-left 0.3s ease;
        }

        /* Cards Styling */
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background: linear-gradient(to right, #ff4f85, #ff6db3);
            color: white;
            font-size: 18px;
            text-transform: uppercase;
            font-weight: bold;
        }

        .card-body {
            font-size: 16px;
            color: #444;
        }

        /* Responsiveness */
        @media (max-width: 768px) {
            .content-wrapper {
                padding: 15px;
            }

            .nav-link {
                font-size: 0.9rem;
            }
        }

        @media (max-width: 576px) {
            .content-wrapper {
                padding: 10px;
            }

            .navbar .navbar-toggler {
                display: block;
            }

            .nav-link {
                font-size: 0.8rem;
            }
        }
    </style>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#">
                <i class="fas fa-school"></i> Rapor-Mu
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>

        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <!-- Area untuk konten utama -->
            @yield('content')
        </div>

        <!-- Footer -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2024 <a href="#">Eric Inzaghi Firdaus (Eriel)</a>.</strong> All rights
            reserved.
        </footer>
    </div>

    <!-- AdminLTE JS -->
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

    <!-- Font Awesome JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>

    <!-- Tambahkan JS tambahan jika diperlukan -->
    @yield('js')
</body>

</html>
