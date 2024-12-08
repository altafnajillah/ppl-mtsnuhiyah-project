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
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">

                        {{-- isi aslinya --}}
                        <h2 class="text-success">{{__("Selamat anda diterima !!!")}}</h2>
                        <p>Selamat kepada [nama siswa] atas keberhasilannya diterima di MTS NUHIYAH PAMBUSUANG! Ini adalah
                            langkah awal menuju perjalanan belajar yang luar biasa. Semoga kamu terus bersemangat, belajar dengan
                            giat, dan meraih prestasi yang membanggakan. Kami percaya bahwa ini adalah awal dari masa depan
                            yang cerah. Selamat menempuh babak baru dalam pendidikanmu!</p>
                        <p>Anda di tetapkan di kelas : {{ $siswa->kelas }} </p>
                        <p>Silakan mengikuti OSPEK pada Tanggal 02-12-2024 </p>
                        {{-- end isi aslinya --}}

                    </div>
                </div>
            </div>
{{--        </div>--}}

    </div>
    <!-- /.container-fluid -->
@endsection
