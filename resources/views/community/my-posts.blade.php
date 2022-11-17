@php use Illuminate\Support\Str; @endphp
@extends('layouts.dashboard')

@section('title')
    My Posts in Community
@endsection

@section('content')
    @include('layouts.sections.alert')

    @forelse($posts as $post)
        <div class="row mb-3">
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('storage/' . $post->foto) }}" class="card-img-top" alt="Post Image">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">{{ $post->judul }}</h5>
                        <p class="card-text d-flex">{!! Str::limit($post->pesan, 200) !!}</p>
                        <!-- Button trigger modal -->
                        <div class="d-flex">

                            <button type="button" class="btn btn-primary mr-2" data-toggle="modal"
                                data-target="#exampleModal{{ $post->id }}">
                                Read More
                            </button>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                                Delete
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah Anda Yakin Ingin Menghapus Post <span
                                                class="font-weight-bold">{{ $post->judul }}</span> ?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <form action="{{ route('communities.destroy', $post->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal{{ $post->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title font-weight-bold" id="exampleModalLabel">{{ $post->judul }}
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="{{ asset($post->foto) }}" width="400px" alt=""
                                            class="rounded rounded-2 img-fluid">
                                        <p>{!! $post->pesan !!}</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <h3 class="text-center mt-4 font-weight-bold">Tidak ada post terkini</h3>
    @endforelse
@endsection
