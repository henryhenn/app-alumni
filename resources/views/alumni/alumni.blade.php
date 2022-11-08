@extends('layouts.main')

@section('title')
    Daftar Alumni
@endsection

@section('content')
    <div class="container-xxl py-6">
        <div class="container">
            <h2 class="text-center mb-3">Data Alumni</h2>
            <div class="card">
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Foto</th>
                            <th>No Telepon</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>Tahun Lulus</th>
                            <th>Pekerjaan</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td><img src="{{ asset('storage/'. $user->foto) }}" class="img-fluid" alt=""></td>
                                <td>{{ $user->no_telp }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->alamat }}</td>
                                <td>{{ $user->tahun_lulus }}</td>
                                <td>{{ $user->pekerjaan }}</td>
                            </tr>
                        @empty

                        @endforelse
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Nama</th>
                            <th>Foto</th>
                            <th>No Telepon</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>Tahun Lulus</th>
                            <th>Pekerjaan</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @push('datatable')
        <link rel="stylesheet"
              href="{{asset('Admin-backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
        <link rel="stylesheet"
              href="{{asset('Admin-backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
        <link rel="stylesheet"
              href="{{asset('Admin-backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
    @endpush
@endsection
