@extends('user.master')
@section('isi')
    <!-- Begin Page Content -->
    <div class="container-fluid pl-5 pr-5">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-12">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-3">
                                <img class="ml-5" src="{{ asset('tema') }}/img/logo.png" alt="">
                            </div>
                            <div class="col-9">
                                <h2>MTS NUHIYAH PAMBUSUANG</h2>
                                <p>Jl. Poros Makassar Km 295 Pambusuang, Kec. Balanipa, Kabupaten Polewali Mandar,
                                    Sulawesi Barat 91353</p>
                                <div class="visi-misi">
                                    <h3>Visi</h3>
                                    <p>Unggul dalam berilmu, beriman, berbangsa dan berahlak mulia sesuai dengan ajaran
                                        Ahlusunnah wal jama'ah</p>
                                    <h3>Misi</h3>
                                    <p>1. Melaksanakan pembelajaran secara efektif dan efisien melalui pendekatan Inquiri
                                        Based Learning discovery based learning, problem based learning sehingga kompenen
                                        siswa dapat berkembang.
                                        <br>2. Melaksanakan pembinaan penelitian ilmiah yng berkaitan dengan iptek. <br>3.
                                        Meningkatkan kegiatan ekstra kurikuler yang efektif dan efisen untuk menumbuh
                                        kembangakan potensi diri siswa. <br>4. Menumbuhkan nilai nilai keimanan sehingga
                                        mampu menerapkan dalam kehidupan sehari hari. <br>5. Mewujudkan siswa yang
                                        berahlakul karimah dan beramaliah Ahlusunnah Wal jama'ah. <br>6. Mewujudkan hubungan
                                        yang harmonis antara warga sekolah dan masyarakat. <br>7. Menerapkan manajemen
                                        partisipatif dengan melihat komponen siswa.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
