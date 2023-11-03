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
      <li class="dropdown <?php echo e(Request::is('dashboard/postingan') || Request::is('dashboard/postingan/trash') ? 'active': ''); ?>">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-pen"></i> <span>Postingan</span></a>
        <ul class="dropdown-menu">
          <li class="<?php echo e(Request::is('dashboard/postingan') ? 'active': ''); ?>"><a class="nav-link" href="<?php echo e(url('dashboard/postingan')); ?>">Data Postingan</a></li>
          <li class="<?php echo e(Request::is('dashboard/postingan/trash') ? 'active': ''); ?>"><a class="nav-link" href="<?php echo e(url('dashboard/postingan/trash')); ?>">Data Trash</a></li>
        </ul>
      </li>
      <!-- Menu Kategori -->
      <li class="dropdown <?php echo e(Request::is('dashboard/kategori')?'active':''); ?>">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-book"></i> <span>Kategori</span></a>
        <ul class="dropdown-menu">
          <li class="<?php echo e(Request::is('dashboard/kategori')?'active':''); ?>"><a class="nav-link" href="<?php echo e(url('dashboard/kategori')); ?>">Data Kategori</a></li>
        </ul>
      </li>
      <!-- Menu Tag -->
      <li class="dropdown <?php echo e(request()->is('dashboard/tag')?'active':''); ?>">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-tag"></i> <span>Tag</span></a>
        <ul class="dropdown-menu">
          <li class="<?php echo e(Request()->is('dashboard/tag')?'active':''); ?>"><a class="nav-link" href="<?php echo e(url('dashboard/tag')); ?>">Data Tag</a></li>
        </ul>
      </li>
      <li class="menu-header">Administrator</li>
      <!-- Menu User Management -->
      <?php if(auth()->guard()->check()): ?>
      <?php if(auth()->user()->tipe_akun === 'superuser' || auth()->user()->tipe_akun === 'admin'): ?>
      <li class="dropdown <?php echo e(request()->is('dashboard/user')?'active':''); ?>">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-users"></i> <span>User Management</span></a>
        <ul class="dropdown-menu">
          <li class="<?php echo e(request()->is('dashboard/user')?'active':''); ?>"><a class="nav-link" href="<?php echo e(url('dashboard/user')); ?>">Data User</a></li>
        </ul>
      </li>
      <?php endif; ?>
      <?php endif; ?>

      <!-- Menu Barcode -->
      <li class="dropdown <?php echo e(request()->is('dashboard/barcode')?'active':''); ?>">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-barcode"></i> <span>View Barcode</span></a>
        <ul class="dropdown-menu">
          <li class="<?php echo e(request()->is('dashboard/barcode')?'active':''); ?>"><a class="nav-link" href="<?php echo e(url('dashboard/barcode')); ?>">Show Barcode</a></li>
        </ul>
      </li>

      <!-- Menu Pengaturan -->
      <?php if(auth()->guard()->check()): ?>
      <?php if(auth()->user()->tipe_akun === 'superuser' || auth()->user()->tipe_akun === 'admin'): ?>
      <li class="dropdown <?php echo e(Request()->is('dashboard/pengaturan')?'active':''); ?>">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-cogs"></i> <span>Pengaturan Web</span></a>
        <ul class="dropdown-menu">
          <li class="<?php echo e(Request()->is('dashboard/pengaturan')?'active':''); ?>"><a class="nav-link" href="<?php echo e(url('dashboard/pengaturan')); ?>">Edit Pengaturan</a></li>
        </ul>
      </li>
      <?php endif; ?>
      <?php endif; ?>

      <!-- Super Akun -->
      <?php if(auth()->guard()->check()): ?>
      <?php if(auth()->user()->tipe_akun === 'superuser'): ?>
      <li class="menu-header">Super Akun</li>
      <li class="dropdown <?php echo e(request()->is('dashboard/my/akun')?'active':''); ?>">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user"></i> <span>Akun</span></a>
        <ul class="dropdown-menu">
          <li class="<?php echo e(request()->is('dashboard/my/akun')?'active':''); ?>"><a class="nav-link" href="<?php echo e(url('dashboard/my/akun')); ?>">Akun Saya</a></li>
        </ul>
      </li>
      <?php endif; ?>
      <?php endif; ?>
      

    </ul>

  </aside>
</div><?php /**PATH C:\xampp\htdocs\cms-blog-laravel-versi-8\resources\views/backend/sidebar.blade.php ENDPATH**/ ?>