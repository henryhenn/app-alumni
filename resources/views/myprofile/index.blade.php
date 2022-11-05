@extends('layouts.dashboard')

@section('title')
    My Profile
@endsection

@section('content')
    <div class="card">
        <div class="card-header border-primary">
            <div class="d-flex justify-content-between">
                <h3 class="align-middle font-weight-bold">{{auth()->user()->name}}</h3>
                <img
                    src="{{auth()->user()->foto ? asset(auth()->user()->foto) : Avatar::create(auth()->user()->name)->toBase64()}}"
                    class="img-circle elevation-2" alt="User Image" width="50px">
            </div>
        </div>
        <div class="card-body">
            <div>
                <p>Nama Lengkap : <span class="font-weight-bold">{{auth()->user()->name}}</span></p>
                <p>Email : <span class="font-weight-bold">{{auth()->user()->email}}</span></p>
                <p>Alamat : <span class="font-weight-bold">{{auth()->user()->alamat}}</span></p>
                <p>Jenis Kelamin : <span class="font-weight-bold">{{auth()->user()->jenis_kelamin}}</span></p>
                <p>Tanggal Lahir : <span class="font-weight-bold">{{auth()->user()->tanggal_lahir}}</span></p>
                <p>Tahun Lulus : <span class="font-weight-bold">{{auth()->user()->tahun_lulus}}</span></p>
                <p>Pekerjaan : <span class="font-weight-bold">{{auth()->user()->pekerjaan}}</span></p>
                <p>Hobby : <span class="font-weight-bold">{{auth()->user()->hobby}}</span></p>
                <p>No. Telpon : <span class="font-weight-bold">{{auth()->user()->no_telp}}</span></p>
            </div>
        </div>
    </div>
@endsection
