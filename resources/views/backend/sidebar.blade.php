<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="#" target="_blank">WEB</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="/">St</a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>
      <li class="active">
        <a href="/dashboard" class="nav-link"><i class="fas fa-home"></i><span>Dashboard</span></a>
      </li>
      <li class="menu-header">Starter</li>
      <!-- Menu Postingan -->
      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-pen"></i> <span>Postingan</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{url('dashboard/postingan')}}">Data Postingan</a></li>
          <li><a class="nav-link" href="{{url('dashboard/postingan/trash')}}">Data Trash</a></li>
        </ul>
      </li>
      <!-- Menu Kategori -->
      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-book"></i> <span>Kategori</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{url('dashboard/kategori')}}">Data Kategori</a></li>
        </ul>
      </li>
      <!-- Menu Tag -->
      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-tag"></i> <span>Tag</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{url('dashboard/tag')}}">Data Tag</a></li>
        </ul>
      </li>
      @can('admin')
      <li class="menu-header">Administrator</li>
      <!-- Menu User -->
      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user"></i> <span>User Management</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{url('dashboard/user')}}">Data User</a></li>
        </ul>
      </li>

      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-cogs"></i> <span>Pengaturan Web</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{url('dashboard/pengaturan')}}">Edit Pengaturan</a></li>
        </ul>
      </li>
      
      @endcan

    </ul>

  </aside>
</div>