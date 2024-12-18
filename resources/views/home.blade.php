<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Rapormu</title>
    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/css/adminlte.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Sidebar Pink */
        .main-sidebar {
            background: linear-gradient(to right, #ff4f85, #ff6db3);
            transition: width 0.3s ease;
        }

        .navbar {
            background-color: #ff4f85;
        }

        .brand-link {
            background-color: #ff4f85;
            color: white;
        }

        .brand-link i {
            color: white;
        }

        .nav-link {
            color: #ffffff !important;
        }

        .nav-link:hover {
            background-color: #f06292 !important;
        }

        .nav-link.logout:hover {
            background-color: #ff4f85 !important;
            color: white;
        }

        /* Content area styling */
        .content-wrapper {
            background-color: #f4f6f9 !important;
            padding: 30px;
            transition: padding-left 0.3s ease;
        }

        /* Responsiveness */
        @media (max-width: 768px) {
            .content-wrapper {
                padding-left: 15px;
            }

            .main-sidebar {
                width: 70px;
            }

            .content-wrapper {
                padding: 15px;
            }

            .nav-link {
                font-size: 0.9rem;
            }
        }

        @media (max-width: 576px) {
            .main-sidebar {
                width: 0;
            }

            .content-wrapper {
                padding-left: 0;
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

<body class="hold-transition sidebar-mini layout-fixed">

    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Beranda</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link logout" href="{{ route('logout') }} "
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i> Keluar
                    </a>
                </li>
            </ul>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="#" class="brand-link">
                <i class="fas fa-school mr-2"></i>
                <span class="brand-text font-weight-light">Rapormu</span>
            </a>
            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        <!-- Data Master -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-database"></i>
                                <p>
                                    Data Master
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <!-- Menambahkan link Data Kelas -->
                                <li class="nav-item">
                                    <a href="{{ route('mata-pelajaran.index') }}" class="nav-link">
                                        <i class="fas fa-building nav-icon"></i>
                                        <p>Data Kelas</p>
                                    </a>
                                </li>
                                <!-- Menambahkan link Data Guru -->
                                <li class="nav-item">
                                    <a href="{{ route('guru.index') }}" class="nav-link">
                                        <i class="fas fa-chalkboard-teacher nav-icon"></i>
                                        <p>Data Guru</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('siswa.index') }}" class="nav-link">
                                        <i class="fas fa-user-graduate nav-icon"></i>
                                        <p>Data Siswa</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('mata-pelajaran.index') }}" class="nav-link">
                                        <i class="fas fa-book-open nav-icon"></i>
                                        <p>Data Mata Pelajaran</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('ekstrakurikuler.index') }}" class="nav-link">
                                        <i class="fas fa-futbol nav-icon"></i>
                                        <p>Data Ekstrakurikuler</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Data Transaksi -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-exchange-alt"></i>
                                <p>
                                    Data Transaksi
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-table nav-icon"></i>
                                        <p>Data Nilai Pelajaran</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-user-tag nav-icon"></i>
                                        <p>Data Nilai Kepribadian</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-futbol nav-icon"></i>
                                        <p>Data Nilai Eskul</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-calendar-alt nav-icon"></i>
                                        <p>Absensi</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Input Nilai -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Input Nilai
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-file-alt nav-icon"></i>
                                        <p>Nilai Tugas & Ulangan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-clipboard nav-icon"></i>
                                        <p>Nilai UTS</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-graduation-cap nav-icon"></i>
                                        <p>Nilai UAS</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Input Absensi -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-calendar-check"></i>
                                <p>Input Absensi</p>
                            </a>
                        </li>

                        <!-- Input Nilai Ekstrakurikuler -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-futbol"></i>
                                <p>Input Nilai Ekstrakurikuler</p>
                            </a>
                        </li>

                        <!-- Input Nilai Kepribadian -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user-check"></i>
                                <p>Input Nilai Kepribadian</p>
                            </a>
                        </li>

                        <!-- Laporan -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-bar"></i>
                                <p>
                                    Laporan
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-folder-open nav-icon"></i>
                                        <p>Laporan Nilai</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-calendar-alt nav-icon"></i>
                                        <p>Laporan Absensi</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-user-tag nav-icon"></i>
                                        <p>Laporan Kepribadian</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-futbol nav-icon"></i>
                                        <p>Laporan Ekstrakurikuler</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </nav>
            </div>
        </aside>
        <!-- /.sidebar -->

        <!-- Content Wrapper -->
        <div class="content-wrapper p-4">
            <h1 class="dashboard-title">Dashboard</h1>
            <p>Konten dashboard Anda ditampilkan di sini...</p>
        </div>
        <!-- /.content-wrapper -->

    </div>

    <!-- AdminLTE JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/js/adminlte.min.js"></script>
</body>

</html>
