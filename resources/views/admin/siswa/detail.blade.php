@extends('admin.master')
@section('isi')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Detail Siswa</h1>

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
                                            <td>Firman</td>
                                        </tr>
                                        <tr>
                                            <th>NIK</th>
                                            <td>632301170012</td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Lahir</th>
                                            <td>2001/02/13</td>
                                        </tr>
                                        <tr>
                                            <th>No Telepon</th>
                                            <td>08000678712</td>
                                        </tr>
                                        <tr>
                                            <th>Jenis Kelamin</th>
                                            <td>Laki-Laki</td>
                                        </tr>
                                        <tr>
                                            <th>Alamat</th>
                                            <td>Pambusuang</td>
                                        </tr>
                                        <tr>
                                            <th>Kartu Keluarga</th>
                                            <td>
                                                <img src="" alt="Foto KK">
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
