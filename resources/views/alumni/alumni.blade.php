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
                            <th>No</th>
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
                        @forelse ($users as $key=>$user)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{ $user->name }}</td>
                                <td><img src="{{ asset('storage/'. $user->foto) }}" width="100px" class="img-fluid"
                                         alt=""></td>
                                <td>{{ $user->no_telp }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->alamat }}</td>
                                <td>{{ $user->tahun_lulus }}</td>
                                <td>{{ $user->pekerjaan }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8">
                                    <h5 class="text-center">Tidak ada data terkini</h5>
                                </td>
                            </tr>
                        @endforelse
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>No</th>
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
@endsection
