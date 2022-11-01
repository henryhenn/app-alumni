    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="index.html" class="navbar-brand p-0">
            <h1 class="m-0">Alumni SCKTC</h1>
            <!-- <img src="img/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
<<<<<<< HEAD:resources/views/frontend-template/layouts/navbar.blade.php
            <div class="navbar-nav ms-auto py-0">
                <a href="/" class="nav-item nav-link active">Home</a>
                <a href="#" class="nav-item nav-link">Community</a>
                <a href="{{ route('profile') }}" class="nav-item nav-link">Profile</a>
                <a href="{{ route('alumni') }}" class="nav-item nav-link">Alumni</a>
            </div>
        </div>
        <a href="login" class="btn btn-dark rounded-pill text-white py-2 px-4 ms-lg-5 animated slideInRight">Login</a>
        </div>
    </nav>
=======
                    <div class="navbar-nav ms-auto py-0">
                        <a href="{{route('home')}}" class="nav-item {{request()->routeIs('home') ? 'active' : ''}} nav-link">Home</a>
                        <a href="" class="nav-item nav-link">Community</a>
                        <a href="{{route('profile')}}" class="nav-item {{request()->routeIs('profile.*') ? 'active' : ''}} nav-link">Profile</a>
                        <a href="{{route('alumni')}}" class="nav-item {{request()->routeIs('alumni.*') ? 'active' : ''}} nav-link">Alumni</a>
                        </div>
                    </div>
                    <a href="{{route('login')}}" class="btn btn-dark rounded-pill text-white py-2 px-4 ms-lg-5 animated slideInRight">Login</a>
                </div>
            </nav>
>>>>>>> origin/main:resources/views/layouts/sections/navbar.blade.php
