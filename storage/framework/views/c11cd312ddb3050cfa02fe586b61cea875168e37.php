<header>
  <div class="container">
    <nav class="navbar navbar-expand-lg bg-light navbar-light">
      <a class="navbar-brand" href="/">Kampungku</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/list_post">Berita</a>
          </li>

          <!-- Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kategori</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hasil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <a href="<?php echo e(url('kategori/'.$hasil->slug)); ?>" class="dropdown-item"><?php echo e($hasil->nama_kategori); ?></a>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
          </li>
          <!-- End Dropdown -->

          <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
          </li>
        </ul>

        <form class="form-inline my-2 my-lg-0 mx-auto">
          <input class="form-control mr-sm-2" type="search" placeholder="Search">
          <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
        </form>

        <ul class="navbar-nav">
          <?php if(auth()->check()): ?>
           <li class="nav-item">
            <a class="nav-link text-white font-weight-bold rounded bg-success" href="<?php echo e(url('/dashboard')); ?>"><i class="fa fa-home"></i> Dashboard</a>
          </li>
           <?php else: ?>
           <li class="nav-item">
            <a class="nav-link text-white font-weight-bold rounded" href="/login" id="btn-pengajuan"><i class="fa fa-sign-in"></i> Login</a>
          </li>
           <?php endif; ?>
          
        </ul>
      </div>
    </nav>
  </div>
</header>


<!-- bcup -->
<!-- <header>
      <div class="container">
        <nav class="navbar navbar-expand-lg bg-light navbar-light">
          <a class="navbar-brand" href="/">Kampungku</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item active">
                <a class="nav-link" href="/">Home</a>
              </li> -->
              <!-- <li class="nav-item">
                <a class="nav-link" href="/kategori">Kategori</a>
              </li> -->

              <!-- <li class="nav-item">
                <a class="nav-link" href="/list_post">Berita</a>
              </li> -->

              <!-- Dropdown -->
              <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kategori</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hasil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <a href="<?php echo e(url('kategori/'.$hasil->slug)); ?>" class="dropdown-item"><?php echo e($hasil->nama_kategori); ?></a>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
              </li> -->
              <!-- End Dropdown -->
<!-- 
              <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/login">Login</a>
              </li>
              
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search">
              <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
        </nav>
      </div>
    </header> --><?php /**PATH C:\xampp\htdocs\cms-blog-laravel-versi-8\resources\views/layout/header.blade.php ENDPATH**/ ?>