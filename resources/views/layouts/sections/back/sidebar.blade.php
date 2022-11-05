@php use Laravolt\Avatar\Facade as Avatar; @endphp
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('dashboard')}}" class="brand-link text-center">
        <span class="brand-text font-weight-bold">App-Alumni</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
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

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
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
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
