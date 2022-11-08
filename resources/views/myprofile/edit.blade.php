@extends('layouts.dashboard')

@section('title')
    Edit My Profile
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
            <form action="{{route('my-profile.update', auth()->id())}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="foto">Foto</label>
                    <input type="file" name="foto" id="foto" value="{{old('foto', auth()->user()->foto)}}"
                           class="form-control @error('foto') is-invalid @enderror">
                    @error('foto')
                    <div class="invalid-feedback mt-2">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="name">Nama Lengkap</label>
                    <input type="text" name="name" id="name" value="{{old('name', auth()->user()->name)}}"
                           class="form-control @error('name') is-invalid @enderror">
                    @error('name')
                    <div class="invalid-feedback mt-2">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" id="alamat" value="{{old('alamat', auth()->user()->alamat)}}"
                           class="form-control @error('alamat') is-invalid @enderror">
                    @error('alamat')
                    <div class="invalid-feedback mt-2">{{$message}}</div>
                    @enderror
                </div>
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                <div class="form-group">
                    <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki-laki" @checked(auth()->user()->jenis_kelamin === 'Laki-laki')
                           class="form-radio @error('jenis_kelamin') is-invalid @enderror"> Laki-laki
                    <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan" @checked(auth()->user()->jenis_kelamin === 'Perempuan')
                           class="form-radio ml-4 @error('jenis_kelamin') is-invalid @enderror"> Perempuan
                    @error('jenis_kelamin')
                    <div class="invalid-feedback mt-2">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="{{old('tanggal_lahir', auth()->user()->tanggal_lahir)}}"
                           class="form-control @error('tanggal_lahir') is-invalid @enderror">
                    @error('tanggal_lahir')
                    <div class="invalid-feedback mt-2">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tahun_lulus">Tahun Lulus</label>
                    <input type="text" name="tahun_lulus" id="tahun_lulus" value="{{old('tahun_lulus', auth()->user()->tahun_lulus)}}"
                           class="form-control @error('tahun_lulus') is-invalid @enderror">
                    @error('tahun_lulus')
                    <div class="invalid-feedback mt-2">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="pekerjaan">Pekerjaan</label>
                    <input type="text" name="pekerjaan" id="pekerjaan" value="{{old('pekerjaan', auth()->user()->pekerjaan)}}"
                           class="form-control @error('pekerjaan') is-invalid @enderror">
                    @error('pekerjaan')
                    <div class="invalid-feedback mt-2">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="hobby">Hobby</label>
                    <input type="text" name="hobby" id="hobby" value="{{old('hobby', auth()->user()->hobby)}}"
                           class="form-control @error('hobby') is-invalid @enderror">
                    @error('hobby')
                    <div class="invalid-feedback mt-2">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="no_telp">No. Telpon</label>
                    <input type="text" name="no_telp" id="no_telp" value="{{old('no_telp', auth()->user()->no_telp)}}"
                           class="form-control @error('no_telp') is-invalid @enderror">
                    @error('no_telp')
                    <div class="invalid-feedback mt-2">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group mt-4">
                    <button type="submit" class="btn btn-outline-primary">Update Profile</button>
                </div>
            </form>
        </div>
    </div>
@endsection
