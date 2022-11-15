@extends('layouts.main')

@section('title')
    Creator's Profilephp
@endsection
@section('content')
    <!-- Team Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Our Team</div>
                <h2 class="mb-5">Meet Our Team Members</h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <h5>Henry Salim</h5>
                        <p class="mb-4">Designation</p>
                        <img class="img-fluid rounded-circle w-100 mb-4" src="{{ asset('img/team-1.jpg') }}" alt="">
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-square text-primary bg-white m-1" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square text-primary bg-white m-1" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-square text-primary bg-white m-1"
                                href="https://www.instagram.com/_henryhenn/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <h5>Daniel</h5>
                        <p class="mb-4">Designation</p>
                        <img class="img-fluid rounded-circle w-100 mb-4" src="{{ asset('img/team-2.jpg') }}" alt="">
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-square text-primary bg-white m-1" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square text-primary bg-white m-1" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-square text-primary bg-white m-1"
                                href="https://www.instagram.com/daniellliu_/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <h5>Steven Widjaja</h5>
                        <p class="mb-4">Designation</p>
                        <img class="img-fluid rounded-circle w-100 mb-4" src="{{ asset('img/team-3.jpg') }}" alt="">
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-square text-primary bg-white m-1" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square text-primary bg-white m-1" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-square text-primary bg-white m-1"
                                href="https://www.instagram.com/_steven_widjaja_/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <h5>Devon Audric</h5>
                        <p class="mb-4">Designation</p>
                        <img class="img-fluid rounded-circle w-100 mb-4" src="{{ asset('img/team-4.png') }}" alt="">
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-square text-primary bg-white m-1" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square text-primary bg-white m-1" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-square text-primary bg-white m-1" href=""><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
