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
                            <img
                                src="{{ asset('storage/' . $siswa->foto) }}"
                                height="200px" alt="Foto diri">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th>Nama Lengkap</th>
                                            <td>{{ $siswa->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>NIK</th>
                                            <td>{{ $siswa->nik }}</td>
                                        </tr>
                                        <tr>
                                            <th>Kelas</th>
                                            <td>{{ $siswa->kelas }}</td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Lahir</th>
                                            <td>{{ $siswa->tgl }}</td>
                                        </tr>
                                        <tr>
                                            <th>No Telepon</th>
                                            <td>{{ $siswa->telp }}</td>
                                        </tr>
                                        <tr>
                                            <th>Jenis Kelamin</th>
                                            <td>{{ $siswa->jk == "L" ? "Laki-laki" : "Perempuan" }}</td>
                                        </tr>
                                        <tr>
                                            <th>Alamat</th>
                                            <td>{{ $siswa->alamat }}</td>
                                        </tr>
                                        <tr>
                                            <th>Kartu Keluarga</th>
                                            <td>
                                                <img src="{{ asset('storage/' . $siswa->kk) }}"
                                                     height="200px" alt="Foto KK">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Akta Kelahiran</th>
                                            <td>
                                                <img src="{{ asset('storage/' . $siswa->akta) }}"
                                                     height="200px" alt="Foto Akta">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Surat Keterangan Lulus</th>
                                            <td>
                                                <img src="{{ asset('storage/' . $siswa->skl) }}"
                                                     height="200px" alt="Foto SKL">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>PIP/KIS/PKH</th>
                                            <td>
                                                @if($siswa->kis !== null)
                                                    <img src="{{ asset('storage/' . $siswa->kis) }}"
                                                         height="200px" alt="Foto PIP/KIS/PKH">
                                                @else
                                                    {{__('Tidak Ada')}}
                                                @endif
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
