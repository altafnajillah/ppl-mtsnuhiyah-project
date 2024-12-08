<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MTS NUHIYAH PAMBUSUANG</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('tema') }}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('tema') }}/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('tema') }}/css/custom.css">
    <!-- Custom styles for this page -->
    <link href="{{ asset('tema') }}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-success sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.index') }}">
            <div class="sidebar-brand-icon">
                <img class="logo" src="{{ asset('tema') }}/img/logo.png" alt="">
            </div>
            <div class="sidebar-brand-text mx-3">MTS NUHIYAH PAMBUSUANG <sup></sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item {{ Request::is('admin') ? "active" : "" }}">
            <a class="nav-link" href="{{ route('admin.index') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-house-fill mr-2" viewBox="0 0 16 16">
                    <path
                        d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z"/>
                    <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z"/>
                </svg>
                <span>{{ __('Beranda') }}</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <li class="nav-item {{ Request::is('admin/pendaftar') ? "active" : "" }}">
            <a class="nav-link" href="{{ route('admin.pendaftar') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-person-lines-fill mr-2" viewBox="0 0 16 16">
                    <path
                        d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z"/>
                </svg>
                <span>Daftar Pendaftar</span></a>
        </li>
        <li class="nav-item {{ Request::is('admin/siswa') ? "active" : "" }}">
            <a class="nav-link" href="{{ route('admin.siswa') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-person-rolodex mr-2" viewBox="0 0 16 16">
                    <path d="M8 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                    <path
                        d="M1 1a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h.5a.5.5 0 0 0 .5-.5.5.5 0 0 1 1 0 .5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5.5.5 0 0 1 1 0 .5.5 0 0 0 .5.5h.5a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H6.707L6 1.293A1 1 0 0 0 5.293 1zm0 1h4.293L6 2.707A1 1 0 0 0 6.707 3H15v10h-.085a1.5 1.5 0 0 0-2.4-.63C11.885 11.223 10.554 10 8 10c-2.555 0-3.886 1.224-4.514 2.37a1.5 1.5 0 0 0-2.4.63H1z"/>
                </svg>
                <span>Manajemen Siswa</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                     class="bi bi-box-arrow-right mr-2" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                          d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
                    <path fill-rule="evenodd"
                          d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                </svg>
                <span>Logout</span>
            </a>
        </li>

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="mainContent d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <h1 class="mt-3 ml-3">SELAMAT DATANG</h1>

                {{--</form>--}}

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <div class="topbar-divider d-none d-sm-block">

                    </div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                            <img class="img-profile rounded-circle"
                                 src="{{ asset('tema') }}/img/undraw_profile.svg">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                {{__('Logout')}}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>

            </nav>
            <!-- End of Topbar -->

            {{-- Awal Isi --}}
            @yield('isi')
            {{-- End Isi --}}

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Kelompok 2 PPL A2021</span>
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

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Siap untuk keluar?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Tekan "Logout" jika anda yakin ingin mengakhiri sesi</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-success" href="#" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
            </div>
        </div>
    </div>
</div>

{{--Modal Kelas--}}
<div class="modal fade" id="classModal" tabindex="-1" role="dialog" aria-labelledby="classModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="classModalLabel">Tentukan Kelas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="classForm">
                    @csrf <!-- Laravel CSRF protection -->
                    <div class="form-group">
                        <label for="className">Kelas Penempatan</label>
                        <input type="text" class="form-control" id="className" name="className" placeholder="Kelas">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="{{ asset('tema') }}/vendor/jquery/jquery.min.js"></script>
<script src="{{ asset('tema') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('tema') }}/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('tema') }}/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="{{ asset('tema') }}/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('tema') }}/js/demo/chart-area-demo.js"></script>
<script src="{{ asset('tema') }}/js/demo/chart-pie-demo.js"></script>

<!-- Page level plugins -->
<script src="{{ asset('tema') }}/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('tema') }}/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('tema') }}/js/demo/datatables-demo.js"></script>

</body>

</html>
