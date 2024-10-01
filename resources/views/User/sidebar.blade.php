<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item {{ Route::currentRouteName() == 'Username' ? 'active' : ''}}">
        <a class="nav-link" href="/username">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('kategoris.index') }}">
          <i class="icon-layout menu-icon"></i>
          <span class="menu-title">Kategori</span>
        </a>
      </li>
    </ul>
  </nav>
