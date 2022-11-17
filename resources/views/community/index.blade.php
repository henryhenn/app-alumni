@extends('layouts.main')

@section('title')
    Community
@endsection

@section('content')
    <div class="container-xxl py-6">
        <div class="container">
            <h2 class="text-center mb-3">Community</h2>
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-md-4 col-sm-12 mb-3">
                        <div class="card mb-3" style="width: 18rem;">
                            <img src="{{ asset('storage/' . $post->foto) }}" class="card-img-top img-fluid"
                                alt="komunitas foto" width="100px">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->judul }}</h5>
                                <p class="card-text">{!! Str::limit($post->pesan, 50, '...') !!}</p>
                                <br>
                                <a href="#" class="btn btn-primary">Read More ...</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
