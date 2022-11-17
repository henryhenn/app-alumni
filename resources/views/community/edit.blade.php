@extends('layouts.dashboard')

@push('trix')
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0-beta.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0-beta.0/dist/trix.umd.min.js"></script>
@endpush

@section('title')
    Edit Post
@endsection

@section('content')
    <div class="container">
        @include('layouts.sections.alert')

        <form action="{{route('communities.update', $post->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="foto">Foto</label>
                <div class="input-group mb-3">
                    <div class="custom-file">
                        <input type="file" name="foto"
                               class="custom-file-input @error('foto') is-invalid @enderror"
                               id="inputGroupFile01">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                </div>

                @error('foto')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="judul">Judul Post</label>
                <input type="text" value="{{ $post->judul }}" name="judul" id="judul" class="form-control @error('judul') is-invalid @enderror">

                @error('judul')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="x">Konten</label>
                <input id="x" type="hidden" name="pesan">
                <trix-editor input="x">{!! $post->pesan !!}</trix-editor>

                @error('pesan')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-outline-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
