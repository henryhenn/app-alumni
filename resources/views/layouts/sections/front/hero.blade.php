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
                <p class="text-white pb-3 animated zoomIn">Tempor rebum no at dolore lorem clita rebum rebum ipsum rebum
                    stet dolor sed justo kasd. Ut dolor sed magna dolor sea diam. Sit diam sit justo amet ipsum vero
                    ipsum clita lorem</p>
                <a href="#komunitas"
                    class="btn btn-outline-light rounded-pill border-2 py-3 px-5 animated slideInRight">Learn More</a>
            </div>
            <div class="col-lg-6 text-center text-lg-start">
                <img class="img-fluid animated zoomIn" src="{{ asset('img/hero.png') }}" alt="">
            </div>
        </div>
    </div>
</div>
