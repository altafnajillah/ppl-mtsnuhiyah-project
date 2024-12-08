@extends('admin.master')
@section('isi')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Detail Pendaftar</h1>

        {{-- isi --}}
        <div class="card">
            <div class="card-body">
                <div class="line" style="width: 5%;"></div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="card-body table-border-style">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th>Nama Lengkap</th>
                                            <td>{{ $pendaftar->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>NIK</th>
                                            <td>{{ $pendaftar->nik }}</td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Lahir</th>
                                            <td>{{ $pendaftar->tgl }}</td>
                                        </tr>
                                        <tr>
                                            <th>No Telepon</th>
                                            <td>{{ $pendaftar->telp }}</td>
                                        </tr>
                                        <tr>
                                            <th>Jenis Kelamin</th>
                                            <td>{{ $pendaftar->jk == "L" ? "Laki-laki" : "Perempuan" }}</td>
                                        </tr>
                                        <tr>
                                            <th>Alamat</th>
                                            <td>{{ $pendaftar->alamat }}</td>
                                        </tr>
                                        <tr>
                                            <th>Kartu Keluarga</th>
                                            <td>
                                                <img src="{{ asset('storage/data/kk/SwY3NaUOSRkFtplQvluOq880f0Gqd4JamFHo9RIx.png', true) }}" height="200px" alt="Foto KK">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Akta Kelahiran</th>
                                            <td>
                                                <img src="" alt="Foto Akta">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Surat Keterangan Lulus</th>
                                            <td>
                                                <img src="" alt="Foto SKL">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>PIP/KIS/PKH</th>
                                            <td>
                                                <img src="" alt="Foto PIP/KIS/PKH">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Aksi</th>
                                            <td>
                                                <a class="btn btn-sm btn-primary">{{__('Terima')}}</a>
                                                <a class="btn btn-sm btn-danger">{{ __('Tolak') }}</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- end isi --}}


    </div>
    <!-- /.container-fluid -->
@endsection
