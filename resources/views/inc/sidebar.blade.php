<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
<<<<<<< HEAD
                <img class="rounded-circle" src="{{ asset('template/img/user.jpg') }}" alt="" style="width: 40px; height: 40px;">
=======
                <img class="rounded-circle" src="{{ asset('template/img/user.jpg') }}" alt=""
                    style="width: 40px; height: 40px;">
>>>>>>> 671ae7349aea329c0caef8715476e966f120d9e0
                <div
                    class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                </div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Jhon Doe</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
<<<<<<< HEAD
            <a href="{{ route('dashboard.index') }}" class="nav-item nav-link {{ Request::routeIs('dashboard.index') ? 'active' : '' }}"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="{{ route('user.index') }}" class="nav-item nav-link {{ Request::routeIs('user.index') ? 'active' : '' }}"><i class="far fa-file-alt me-2"></i>User</a>
            <a href="{{ route('level.index') }}" class="nav-item nav-link {{ Request::routeIs('level.index') ? 'active' : '' }}"><i class="far fa-file-alt me-2"></i>Level</a>
            <a href="widget.html" class="nav-item nav-link"><i class="far fa-file-alt me-2"></i>Jurusan</a>
=======
            <a href="" class="nav-item nav-link {{ Request::routeIs('admin.dashboard') ? 'active' : '' }}"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                        class="fa fa-laptop me-2"></i>Elements</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="button.html" class="dropdown-item">Buttons</a>
                    <a href="typography.html" class="dropdown-item">Typography</a>
                    <a href="element.html" class="dropdown-item">Other Elements</a>
                </div>
            </div>
            <a href="form.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Forms</a>
            <a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{ Request::routeIs('level.index') ? 'active' : '' }}" data-bs-toggle="dropdown"><i
                        class="far fa-file-alt me-2"></i>Pages</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('level.index') }}" class="dropdown-item {{ Request::routeIs('level.index') ? 'active' : '' }}">Level</a>
                    <a href="{{ route('jurusan.index') }}" class="dropdown-item {{ Request::routeIs('jurusan.index') ? 'active' : '' }}">Jurusan</a>
                    <a href="404.html" class="dropdown-item">404 Error</a>
                    <a href="blank.html" class="dropdown-item">Blank Page</a>
                </div>
            </div>
>>>>>>> 671ae7349aea329c0caef8715476e966f120d9e0
        </div>
    </nav>
</div>
