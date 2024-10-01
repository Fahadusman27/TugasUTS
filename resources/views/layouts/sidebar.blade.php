<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item {{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item {{ Route::currentRouteName() == 'kategori.index' && Route::currentRouteName() != 'dashboard' ? '' : '' }}">
            <a class="nav-link" href="{{ route('kategori.index') }}">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Kategori</span>
            </a>
        </li>
        <li class="nav-item {{ Route::currentRouteName() == 'bukus.index' && Route::currentRouteName() != 'dashboard' ? '' : '' }}">
            <a class="nav-link" href="{{ route('bukus.index') }}">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Buku</span>
            </a>
        </li>
        <li class="nav-item {{ Route::currentRouteName() == 'mahasiswa.index' && Route::currentRouteName() != 'dashboard' ? '' : '' }}">
            <a class="nav-link" href="{{ route('mahasiswa.index') }}">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Mahasiswa</span>
            </a>
        </li>
    </ul>
</nav>
