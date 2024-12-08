@extends('user.master')
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
                        @if(session('success'))
                            <div id="flash-message" class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @elseif(session('error'))
                            <div id="flash-message" class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        {{-- isi aslinya --}}
                        <form action="{{ route('user.pendaftar.store') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <h4>Data Siswa</h4>
                                    <div class="dataSiswa">
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Nama Lengkap</label>
                                            <input type="text" class="form-control" id="nama" name="name"
                                                   placeholder="Masukkan nama disini . . ."
                                                   value="{{ Auth::user()->name }}">
                                        </div>
                                        <div class="container ml-2 mb-2 form-row">
                                            <div class="form-check col">
                                                <input class="form-check-input" type="radio" name="jk" id="lk" value="L">
                                                <label class="form-check-label" for="lk">
                                                    {{ __('Laki-laki') }}
                                                </label>
                                            </div>
                                            <div class="form-check col">
                                                <input class="form-check-input" type="radio" name="jk" id="pr" value="P" checked>
                                                <label class="form-check-label" for="pr">
                                                    {{ __('Perempuan') }}
                                                </label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="nik" class="form-label">NIK</label>
                                            <input type="text" class="form-control" id="nik" name="nik"
                                                   placeholder="Masukkan NIK disini . . .">
                                        </div>
                                        <div class="mb-3">
                                            <label for="tgl" class="form-label">Tanggal Lahir</label>
                                            <input type="date" class="form-control" id="tgl" name="tgl"
                                                   placeholder="Masukkan TTL disini . . .">
                                        </div>
                                        <div class="mb-3">
                                            <label for="alamat" class="form-label">Alamat</label>
                                            <input type="text" class="form-control" id="alamat" name="alamat"
                                                   placeholder="Masukkan alamat disini . . .">
                                        </div>
                                        <div class="mb-3">
                                            <label for="telp" class="form-label">No. Telepon</label>
                                            <input type="text" class="form-control" id="telp" name="telp"
                                                   placeholder="Masukkan nomor telepon disini . . .">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <h4>Dokumen Pendukung</h4>
                                    <div class="dokumenSiswa">
                                        <div class="mb-3">
                                            <label for="foto" class="form-label">Pas Foto</label>
                                            <input type="file" class="form-control" id="foto" name="foto"
                                                   accept=".png, .jpg, jpeg" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="kk" class="form-label">Kartu Keluarga</label>
                                            <input type="file" class="form-control" id="kk" name="kk" accept=".png, .jpg, jpeg" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="akta" class="form-label">Akta Kelahiran</label>
                                            <input type="file" class="form-control" id="akta" name="akta"
                                                   accept=".png, .jpg, jpeg" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="skl" class="form-label">Surat Keterangan
                                                Lulus</label>
                                            <input type="file" class="form-control" id="skl" name="skl"
                                                   accept=".png, .jpg, jpeg" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="kis" class="form-label">Kartu PIP/PKH/KIS (jika ada)</label>
                                            <input type="file" class="form-control" id="kis" name="kis"
                                                   accept=".png, .jpg, jpeg">
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-success custom-btn" type="submit">Simpan</button>
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
