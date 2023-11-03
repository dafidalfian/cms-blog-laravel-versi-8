<div class="main-sidebar bg-white shadow sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="/" target="_blank">WEB</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="/dashboard">St</a>
    </div>
    <ul class="sidebar-menu mb-5">
      <li class="menu-header">Dashboard</li>
      <li class="active">
        <a href="/dashboard" class="nav-link"><i class="fas fa-home"></i><span>Dashboard</span></a>
      </li>
      <li class="menu-header">Starter</li>
      <!-- Menu Postingan -->
      <li class="dropdown {{Request::is('dashboard/postingan') || Request::is('dashboard/postingan/trash') ? 'active': ''}}">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-pen"></i> <span>Postingan</span></a>
        <ul class="dropdown-menu">
          <li class="{{Request::is('dashboard/postingan') ? 'active': ''}}"><a class="nav-link" href="{{url('dashboard/postingan')}}">Data Postingan</a></li>
          <li class="{{Request::is('dashboard/postingan/trash') ? 'active': ''}}"><a class="nav-link" href="{{url('dashboard/postingan/trash')}}">Data Trash</a></li>
        </ul>
      </li>
      <!-- Menu Kategori -->
      <li class="dropdown {{Request::is('dashboard/kategori')?'active':''}}">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-book"></i> <span>Kategori</span></a>
        <ul class="dropdown-menu">
          <li class="{{Request::is('dashboard/kategori')?'active':''}}"><a class="nav-link" href="{{url('dashboard/kategori')}}">Data Kategori</a></li>
        </ul>
      </li>
      <!-- Menu Tag -->
      <li class="dropdown {{request()->is('dashboard/tag')?'active':''}}">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-tag"></i> <span>Tag</span></a>
        <ul class="dropdown-menu">
          <li class="{{Request()->is('dashboard/tag')?'active':''}}"><a class="nav-link" href="{{url('dashboard/tag')}}">Data Tag</a></li>
        </ul>
      </li>
      <li class="menu-header">Administrator</li>
      <!-- Menu User Management -->
      @auth
      @if(auth()->user()->tipe_akun === 'superuser' || auth()->user()->tipe_akun === 'admin')
      <li class="dropdown {{request()->is('dashboard/user')?'active':''}}">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-users"></i> <span>User Management</span></a>
        <ul class="dropdown-menu">
          <li class="{{request()->is('dashboard/user')?'active':''}}"><a class="nav-link" href="{{url('dashboard/user')}}">Data User</a></li>
        </ul>
      </li>
      @endif
      @endauth

      <!-- Menu Barcode -->
      <li class="dropdown {{request()->is('dashboard/barcode')?'active':''}}">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-barcode"></i> <span>View Barcode</span></a>
        <ul class="dropdown-menu">
          <li class="{{request()->is('dashboard/barcode')?'active':''}}"><a class="nav-link" href="{{url('dashboard/barcode')}}">Show Barcode</a></li>
        </ul>
      </li>

      <!-- Menu Pengaturan -->
      @auth()
      @if(auth()->user()->tipe_akun === 'superuser' || auth()->user()->tipe_akun === 'admin')
      <li class="dropdown {{Request()->is('dashboard/pengaturan')?'active':''}}">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-cogs"></i> <span>Pengaturan Web</span></a>
        <ul class="dropdown-menu">
          <li class="{{Request()->is('dashboard/pengaturan')?'active':''}}"><a class="nav-link" href="{{url('dashboard/pengaturan')}}">Edit Pengaturan</a></li>
        </ul>
      </li>
      @endif
      @endauth

      <!-- Super Akun -->
      @auth
      @if(auth()->user()->tipe_akun === 'superuser')
      <li class="menu-header">Super Akun</li>
      <li class="dropdown {{request()->is('dashboard/my/akun')?'active':''}}">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user"></i> <span>Akun</span></a>
        <ul class="dropdown-menu">
          <li class="{{request()->is('dashboard/my/akun')?'active':''}}"><a class="nav-link" href="{{url('dashboard/my/akun')}}">Akun Saya</a></li>
        </ul>
      </li>
      @endif
      @endauth
      

    </ul>

  </aside>
</div>