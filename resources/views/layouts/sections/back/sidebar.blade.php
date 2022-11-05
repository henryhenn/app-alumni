@php use Laravolt\Avatar\Facade as Avatar; @endphp
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{route('dashboard')}}" class="brand-link text-center">
        <span class="brand-text font-weight-bold">App-Alumni</span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img
                    src="{{auth()->user()->foto ? asset(auth()->user()->foto) : Avatar::create(auth()->user()->name)->toBase64()}}"
                    class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{route('my-profile.index')}}" class="d-block">{{auth()->user()->name}}</a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link {{request()->routeIs('dashboard') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link {{request()->routeIs('my-profile.*') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-id-card"></i>
                        <p>
                            My Profile
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('my-profile.index')}}"
                               class="nav-link {{request()->routeIs('my-profile.index') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Profile</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('my-profile.edit', auth()->id())}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Edit My Profile</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @role('Super Admin')
                <li class="nav-item">
                    <a href="#" class="nav-link {{request()->routeIs('admins.*') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Admin
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admins.index')}}"
                               class="nav-link {{ request()->routeIs('admins.index') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List Admin</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admins.create')}}"
                               class="nav-link {{request()->routeIs('admins.create') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tambah Admin Baru</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endrole
                @role('Admin')
                <li class="nav-item">
                    <a href="" class="nav-link">List Data Alumni</a>
                </li>
                @endrole
                <li class="nav-item">
                    <a type="button" class="nav-link" data-toggle="modal"
                       data-target="#logoutModal">
                        <i class="nav-icon fas fa-power-off"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>

<div class="modal fade" id="logoutModal" tabindex="-1"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
                <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda Yakin Ingin Logout?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Batal
                </button>
                <form action="{{route('logout')}}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-danger">Yakin</button>
                </form>
            </div>
        </div>
    </div>
</div>
