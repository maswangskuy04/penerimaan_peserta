<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown">
                <a href="{{ route('admin.dashboard') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Pages</li>
            <li class="dropdown {{ Request::routeIs('user.index', 'user.create', 'user.edit') ? 'active' : '' }}">
                <a href="{{ route('user.index') }}" class="nav-link"><i class="far fa-user"></i> <span>User</span></a>
            </li>
            <li class="dropdown {{ Request::routeIs('level.index', 'level.create', 'level.edit') ? 'active' : '' }}">
                <a href="{{ route('level.index') }}" class="nav-link"><i class="far fa-user"></i> <span>Level</span></a>
            </li>
            <li class="dropdown {{ Request::routeIs('jurusan.index', 'jurusan.create', 'jurusan.edit') ? 'active' : '' }}">
                <a href="{{ route('jurusan.index') }}" class="nav-link"><i class="far fa-user"></i> <span>Jurusan</span></a>
            </li>
            <li class="dropdown {{ Request::routeIs('gelombangs.index', 'gelombangs.create', 'gelombangs.edit') ? 'active' : '' }}">
                <a href="{{ route('gelombangs.index') }}" class="nav-link"><i class="far fa-user"></i> <span>Gelombang</span></a>
            </li>
            <li class="dropdown {{ Request::routeIs('peserta-pelatihan.index', 'peserta-pelatihan.create', 'peserta-pelatihan.edit') ? 'active' : '' }}">
                <a href="{{ route('peserta-pelatihan.index') }}" class="nav-link"><i class="far fa-user"></i> <span>Peserta Pelatihan</span></a>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link"><i class="far fa-user"></i> <span>User Jurusan</span></a>
            </li>
        </ul>
    </aside>
</div>
