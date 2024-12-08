@extends('admin.master')
@section('isi')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Daftar Pendaftar</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead class="bg-secondary">
                            <tr>
                                <th class="text-dark">No</th>
                                <th class="text-dark">NIK</th>
                                <th class="text-dark">Nama</th>
                                <th class="text-dark">Alamat</th>
                                <th class="text-dark">No Telepon</th>
                                <th class="text-dark">Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($pendaftars as $k => $pendaftar)
                            <tr>
                                <td>{{ $k + 1 }}</td>
                                <td>{{ $pendaftar->nik }}</td>
                                <td>{{ $pendaftar->name }}</td>
                                <td>{{ $pendaftar->alamat }}</td>
                                <td>{{ $pendaftar->telp }}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('admin.pendaftar.detail', $pendaftar->id) }}">Detail</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
