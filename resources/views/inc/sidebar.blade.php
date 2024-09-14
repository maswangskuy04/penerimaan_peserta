<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h5 class="text-info">Pendaftaran PPKDJP</h5>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{ asset('template/img/user.jpg') }}" alt=""
                    style="width: 40px; height: 40px;">
                <div
                    class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                </div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{ Auth::user()->nama_lengkap }}</h6>
                <span>{{ Auth::user()->levels->nama_level }}</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{ route('admin.dashboard') }}"
                class="nav-item nav-link {{ Request::routeIs('dashboard.index') ? 'active' : '' }}"><i
                    class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="{{ route('user.index') }}"
                class="nav-item nav-link {{ Request::routeIs('user.index') ? 'active' : '' }}"><i
                    class="far fa-file-alt me-2"></i>User</a>
            <a href="{{ route('level.index') }}"
                class="nav-item nav-link {{ Request::routeIs('level.index') ? 'active' : '' }}"><i
                    class="far fa-file-alt me-2"></i>Level</a>
            <a href="{{ route('jurusan.index') }}"
                class="nav-item nav-link {{ Request::routeIs('jurusan.index') ? 'active' : '' }}"><i
                    class="far fa-file-alt me-2"></i>Jurusan</a>
            <a href="{{ route('peserta-pelatihan.index') }}"
                class="nav-item nav-link {{ Request::routeIs('peserta-pelatihan.index') ? 'active' : '' }}"><i
                    class="far fa-file-alt me-2"></i>Peserta Pelatihan</a>
            <a href="{{ route('gelombangs.index') }}"
                class="nav-item nav-link {{ Request::routeIs('gelombangs.index') ? 'active' : '' }}"><i
                    class="far fa-file-alt me-2"></i>Gelombang</a>
        </div>
    </nav>
</div>
