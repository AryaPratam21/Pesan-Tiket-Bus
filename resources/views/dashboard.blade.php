<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Aplikasi Penjualan Tiket Bus')</title>
    <!-- Custom fonts for this template -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/startbootstrap-sb-admin-2@4.1.3/css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        .sidebar .nav-item .nav-link {
            color: white;
        }

        .sidebar .nav-item .nav-link:hover {
            color: #1cc88a;
        }

        .btn-primary {
            background-color: #1cc88a;
            border-color: #1cc88a;
        }

        .btn-primary:hover {
            background-color: #17a673;
            border-color: #17a673;
        }
    </style>
</head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-ticket-alt"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin Tiket</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('buses.index') }}">
                    <i class="fas fa-fw fa-bus"></i>
                    <span>Bus</span>
                </a>
            </li>

            <!-- Nav Item - Tiket -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('tikets.index') }}">
                    <i class="fas fa-fw fa-ticket-alt"></i>
                    <span>Tiket</span>
                </a>
            </li>

            <!-- Nav Item - Penjualan -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('penjualans.index') }}">
                    <i class="fas fa-fw fa-chart-line"></i>
                    <span>Penjualan</span>
                </a>
            </li>

            <!-- Nav Item - Transaksi -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('transaksis.index') }}">
                    <i class="fas fa-fw fa-exchange-alt"></i>
                    <span>Transaksi</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Register</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <form action="{{ route('logout') }}" method="POST" class="nav-link">
                                    @csrf
                                    <button type="submit" class="btn btn-link text-gray-600">Logout</button>
                                </form>
                            </li>
                        @endguest
                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    @auth
                        <div class="jumbotron">
                            <h1 class="display-4">Selamat Datang!</h1>
                            <p class="lead">Ini adalah aplikasi penjualan tiket bus yang membantu Anda mengelola pemesanan Tiket Bus dengan mudah.</p>
                            <hr class="my-4">
                        </div>
                    @else
                        @yield('content')
                    @endauth

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>&copy; 2024 Aplikasi Penjualan Tiket Bus. All rights reserved.</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/jquery.easing@1.4.1/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="https://cdn.jsdelivr.net/npm/startbootstrap-sb-admin-2@4.1.3/js/sb-admin-2.min.js"></script>

</body>
</html>
