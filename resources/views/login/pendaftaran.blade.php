@extends('templateUser')
@section('isi')
    <!-- Begin Page Content -->
    <div class="container-fluid  pl-5 pr-5">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Pendaftaran Siswa</h1>
        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-12">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">

                        {{-- isi aslinya --}}
                        <form action="">
                            <div class="row">
                                <div class="col-6">
                                    <h4>Data Siswa</h4>
                                    <div class="dataSiswa">
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Nama Lengkap</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1"
                                                placeholder="Masukkan nama disini . . .">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">NIK</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1"
                                                placeholder="Masukkan NIK disini . . .">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Tempat Tanggal
                                                Lahir</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1"
                                                placeholder="Masukkan TTL disini . . .">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Alamat</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1"
                                                placeholder="Masukkan alamat disini . . .">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <h4>Dokumen Pendukung</h4>
                                    <div class="dokumenSiswa">
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Kartu Keluarga</label>
                                            <input type="file" class="form-control" id="exampleInputPassword1"">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Akta Kelahiran</label>
                                            <input type="file" class="form-control" id="exampleInputPassword1"
                                                placeholder="Masukkan NIK disini . . .">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Surat Keterangan
                                                Lulus</label>
                                            <input type="file" class="form-control" id="exampleInputPassword1"
                                                placeholder="Masukkan TTL disini . . .">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Kartu PIP/PKH/KIS(jika
                                                ada)</label>
                                            <input type="file" class="form-control" id="exampleInputPassword1"
                                                placeholder="Masukkan alamat disini . . .">
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-success custom-btn">Simpan</button>
                            </div>
                        </form>
                        {{-- end isi aslinya --}}

                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
