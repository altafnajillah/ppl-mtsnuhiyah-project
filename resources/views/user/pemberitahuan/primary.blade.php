@extends('user.master')
@section('isi')
    <!-- Begin Page Content -->
    <div class="container-fluid  pl-5 pr-5">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Pemberitahuan</h1>
        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-12">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">

                        {{-- isi aslinya --}}

                        <h2 class="text-primary">{{__("Silahkan mengisi data pendaftaran")}}</h2>
                        <p>Silahkan mengisi data-data yang ada dengan benar dan teliti, simpan dan tunggu tanggapan admin secara berkala!</p>


                        {{-- end isi aslinya --}}

                    </div>
                </div>
            </div>
{{--        </div>--}}

    </div>
    <!-- /.container-fluid -->
@endsection
