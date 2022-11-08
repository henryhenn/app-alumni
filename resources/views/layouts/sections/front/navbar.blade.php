<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="{{ route('home') }}" class="navbar-brand p-0">
        <h1 class="m-0 {{ !request()->routeIs('home') ? 'text-dark' : '' }} ">Alumni SCKTC</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="{{ route('home') }}"
                class="nav-item {{ !request()->routeIs('home') ? 'text-dark' : '' }} {{ request()->routeIs('home') ? 'active' : '' }} nav-link">Home</a>
            <a href="" class="nav-item nav-link {{ !request()->routeIs('home') ? 'text-dark' : '' }}">Community</a>
            <a href="{{ route('profile') }}"
                class="nav-item {{ !request()->routeIs('home') ? 'text-dark' : '' }} {{ request()->routeIs('profile.*') ? 'active' : '' }} nav-link">Profile</a>
            <a href="{{ route('alumni') }}"
                class="nav-item {{ !request()->routeIs('home') ? 'text-dark' : '' }} {{ request()->routeIs('alumni.*') ? 'active' : '' }} nav-link">Alumni</a>
        </div>
    </div>
    @auth
        <a href="{{ route('my-profile.index') }}"
            class="btn btn-dark rounded-pill text-white py-2 px-4 ms-lg-5 animated slideInRight">My Profile</a>
    @else
        <a href="{{ route('login') }}"
            class="btn btn-dark rounded-pill text-white py-2 px-4 ms-lg-5 animated slideInRight">Login</a>
    @endauth
    </div>
</nav>
