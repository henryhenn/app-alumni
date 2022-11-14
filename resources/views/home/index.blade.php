@extends('layouts.main')

@section('title')
    Home
@endsection

@section('hero')
    <div class="container-xxl bg-primary hero-header">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                    @if (session('message'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">

                            </button>
                        </div>
                    @endif
                    <h1 class="text-white mb-4 animated zoomIn">Selamat datang di aplikasi Alumni</h1>
                    <p class="text-white pb-3 animated zoomIn">Tempor rebum no at dolore lorem clita rebum rebum ipsum
                        rebum
                        stet dolor sed justo kasd. Ut dolor sed magna dolor sea diam. Sit diam sit justo amet ipsum vero
                        ipsum clita lorem</p>
                    <a href="#komunitas"
                       class="btn btn-outline-light rounded-pill border-2 py-3 px-5 animated slideInRight">Learn
                        More</a>
                </div>
                <div class="col-lg-6 text-center text-lg-start">
                    <img class="img-fluid animated zoomIn" src="{{ asset('img/hero.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    >>>>>>> origin/daniel
@endsection

@section('content')
    <!-- About Start -->
    <div class="container-xxl py-6" id="komunitas">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow zoomIn" data-wow-delay="0.1s">
                    <img class="img-fluid" src="{{ asset('img/komunity.png') }}">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Community</div>
                    <h2 class="mb-4">Bergabung komunitas untuk mendapatkan informasi yang terbaru</h2>
                    <p class="mb-4">Dengan bergabung dengan komunitas, Anda dapat berkomunikasi dengan teman lama Anda,
                        berbagi pengalaman, info lowongan pekerjaan, dan masih banyak.</p>
                    <div class="row g-3 mb-4">
                        <div class="col-12 d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fa fa-user-tie text-white"></i>
                            </div>
                            <div class="ms-4">
                                <h6>Lowongan Pekerjaan</h6>
                                <span>Dapatkan informasi lowongan pekerjaan dari para alumni sekolah SMK Cinta Kasih Tzu
                                    Chi.
                                </span>
                            </div>
                        </div>
                        <div class="col-12 d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fa fa-chart-line text-white"></i>
                            </div>
                            <div class="ms-4">
                                <h6>Informasi Terbaru</h6>
                                <span>Dapatkan informasi terbaru terkait sekolah SMK Cinta Kasih Tzu Chi.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl bg-primary my-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container px-lg-5">
            <div class="row align-items-center" style="height: 250px;">
                <div class="col-12 col-md-6">
                    <h3 class="text-white">Yuk, Register di Sini</h3>
                    <p class="text-white">Please Register here !</p>
                    <div class="position-relative w-100 mt-3">
                        <a href="{{ route('register') }}"
                           class="btn btn-outline-light rounded-pill border-2 py-3 px-5 animated slideInRight">Register</a>
                    </div>
                </div>
                <div class="col-md-6 text-center mb-n5 d-none d-md-block">
                    <img class="img-fluid mt-5" style="max-height: 250px;" src="{{ asset('img/newsletter.png') }}">
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Features</div>
                    <h2 class="mb-4">Kelebihan Aplikasi Alumni SMK Cinta Kasih Tzu Chi</h2>
                    <p>Aplikasi alumni milik SMK Cinta Kasih Tzu Chi ini memiliki berbagai macam kelebihan dan manfaat.
                        Siapa pun siswa dan guru SMK yang bergabung ke aplikasi alumni milik SMK Cinta Kasih Tzu Chi ini
                        juga bisa mendapatkan berbagai macam informasi seputar SMK Cinta Kasih Tzu Chi dan informasi
                        dari
                        para alumni yang sudah lulus.</p>
                    <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="">Read More</a>
                </div>
                <div class="col-lg-7">
                    <div class="row g-5">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                    <i class="fa fa-info text-white"></i>
                                </div>
                                <h6 class="mb-0">Informasi Terbaru</h6>
                            </div>
                            <span>Para aggota akan mendapatkan berbagai macam informasi seputar SMK Cinta Kasih Tzu Chi, seperti event dan lomba.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                    <i class="fa fa-briefcase text-white"></i>
                                </div>
                                <h6 class="mb-0">Informasi Lowongan Kerja</h6>
                            </div>
                            <span>Para alumni bisa mendapatkan banyak informasi tentang berbagai macam lowongan pekerjaan.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                    <i class="fa fa-comments text-white"></i>
                                </div>
                                <h6 class="mb-0">Forum Chat</h6>
                            </div>
                            <span>Seluruh siswa, guru, dan alumni SMK Cinta Kasih Tzu Chi dapat berkomunikasi di forum chat.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                    <i class="fa fa-users-between-lines text-white"></i>
                                </div>
                                <h6 class="mb-0">Menambah Relasi</h6>
                            </div>
                            <span>Para anggota dapat terhubung satu sama lain sehingga dapat menambah relasi baru.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                    <i class="fa fa-people-line text-white"></i>
                                </div>
                                <h6 class="mb-0">Data Para Alumni</h6>
                            </div>
                            <span>Para anggota bisa melihat seluruh foto dan nama para alumni yang sudah lulus.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Features End -->


    <!-- Client Start -->
    <div class="container-xxl bg-primary my-6 py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="owl-carousel client-carousel">
                <a href="#"><img class="img-fluid" src="{{ asset('img/logo-1.png') }}" alt=""></a>
                <a href="#"><img class="img-fluid" src="{{ asset('img/logo-2.png') }}" alt=""></a>
                <a href="#"><img class="img-fluid" src="{{ asset('img/logo-3.png') }}" alt=""></a>
                <a href="#"><img class="img-fluid" src="{{ asset('img/logo-4.png') }}" alt=""></a>
                <a href="#"><img class="img-fluid" src="{{ asset('img/logo-5.png') }}" alt=""></a>
                <a href="#"><img class="img-fluid" src="{{ asset('img/logo-6.png') }}" alt=""></a>
                <a href="#"><img class="img-fluid" src="{{ asset('img/logo-7.png') }}" alt=""></a>
                <a href="#"><img class="img-fluid" src="{{ asset('img/logo-8.png') }}" alt=""></a>
            </div>
        </div>
    </div>
    <!-- Client End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Alumni</div>
                <h2 class="mb-5">Alumni Cinta Kasih Tzu Chi Say</h2>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item rounded p-4">
                    <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                    <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore
                        diam</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('img/testimonial-1.jpg') }}">
                        <div class="ps-3">
                            <h6 class="mb-1">Client Name</h6>
                            <small>Profession</small>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item rounded p-4">
                    <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                    <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore
                        diam</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('img/testimonial-2.jpg') }}">
                        <div class="ps-3">
                            <h6 class="mb-1">Client Name</h6>
                            <small>Profession</small>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item rounded p-4">
                    <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                    <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore
                        diam</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('img/testimonial-3.jpg') }}">
                        <div class="ps-3">
                            <h6 class="mb-1">Client Name</h6>
                            <small>Profession</small>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item rounded p-4">
                    <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                    <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore
                        diam</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('img/testimonial-4.jpg') }}">
                        <div class="ps-3">
                            <h6 class="mb-1">Client Name</h6>
                            <small>Profession</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection
