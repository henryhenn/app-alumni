<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s" style="margin-top: 6rem;">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-3">
                <h5 class="text-white mb-4">Get In Touch</h5>
                <p><i class="fa fa-map-marker-alt me-3"></i>Jln. Kamal Raya Outer Ring Road No.20 - Cengkareng, Jakarta
                    Barat</p>
                <p><i class="fa fa-phone-alt me-3"></i>(021) 5439 7462</p>
                <p><i class="fa fa-envelope me-3"></i>smk.cintakasihtzuchi.sch.id</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href="https://twitter.com/alumni_smkcktc"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/cintakasihtzuchi"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social"
                       href="https://www.youtube.com/channel/UCiJzzGJfhL8MyLXvz8YyosA"><i
                            class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/smkcintakasihtzuchi/"><i
                            class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <h5 class="text-white mb-4">Quick Link</h5>
                <a class="btn btn-link" href="{{route('home')}}">Home</a>
                <a class="btn btn-link" href="{{route('communities')}}">Community</a>
                <a class="btn btn-link" href="{{route('profile')}}">Profile</a>
                <a class="btn btn-link" href="{{route('alumni')}}">Alumni</a>
                @guest
                    <a class="btn btn-link" href="{{route('login')}}">Login</a>
                @endguest
            </div>
            <div class="col-md-6 col-lg-3">
                <h5 class="text-white mb-4">Popular Link</h5>
                <a class="btn btn-link" href="{{route('home')}}">Home</a>
                <a class="btn btn-link" href="{{route('communities')}}">Community</a>
            </div>
            <div class="col-md-6 col-lg-3">
                <h5 class="text-white mb-4">Newsletter</h5>
                <p>Jika memiliki pertanyaan seputar alumni dan sekolah, bisa di chat lewat email. Terima kasih Gan
                    En</p>
                <div class="position-relative w-100  mt-3">
                    <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text"
                           placeholder="Your Email" style="height: 48px;">
                    <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i
                            class="fa fa-paper-plane text-primary fs-4"></i></button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">Website Alumni CKTC</a>, All Right Reserved.
                    Designed By <a class="border-bottom">Kelompok 4</a>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a href="{{route('home')}}">Home</a>
                        <a href="">Cookies</a>
                        <a href="">Help</a>
                        <a href="">FQAs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Footer End -->
