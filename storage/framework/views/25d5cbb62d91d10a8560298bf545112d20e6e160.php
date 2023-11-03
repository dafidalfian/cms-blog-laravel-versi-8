
<?php $__env->startSection('title','Login'); ?>
<?php $__env->startSection('content'); ?>
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="<?php echo e(asset('storage/'.$logo->icon_situs)); ?>" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Login</h4></div>

              <div class="card-body">
                <form method="post" action="<?php echo e(url('/login')); ?>" class="needs-validation">
                  <?php echo csrf_field(); ?>

                  <?php if(session('success')): ?>
                  <div class="alert alert-success">
                    <h4><?php echo e(session('success')); ?></h4>
                    <hr class="mb-0">
                    <p class="mb-0">Mohon untuk login !</p>
                  </div>
                  <?php endif; ?>

                  <?php if(session('login_gagal')): ?>
                  <div class="alert alert-danger">
                    <h4><?php echo e(session('login_gagal')); ?></h4>
                    <hr class="mb-0">
                    <p class="mb-0">Mohon untuk cek ulang !</p>
                  </div>
                  <?php endif; ?>
            
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your email
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                      <label for="password" class="control-label">Password</label>
                      <div class="float-right">
                        <a href="<?php echo e(url('folder_file_reset/lupa_sandi')); ?>" class="text-small">
                          Forgot Password?
                        </a>
                      </div>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">Sing in</button>
                  </div>
                </form>
                <div class="text-center mt-4 mb-3">
                  <div class="text-job text-muted">Login With Social</div>
                </div>
                <div class="row sm-gutters">
                  <div class="col-6">
                    <a class="btn btn-block btn-social btn-facebook" href="<?php echo e(route('facebook.login')); ?>">
                      <span class="fab fa-facebook"></span> Facebook
                    </a>
                  </div>
                  <div class="col-6">
                    <a class="btn btn-block btn-social btn-google" href="<?php echo e(route('google.login')); ?>">
                      <span class="fab fa-google"></span> Google
                    </a>                                
                  </div>
                </div>

              </div>
            </div>
            <div class="mt-3 text-muted text-center">
              Not registered? <a href="/register">Register Now!</a>
            </div>
            <p class="mt-5 mb-3 text-muted text-center">Versi 1.0</p>
          </div>
        </div>
      
      <?php $__env->stopSection(); ?>
<?php echo $__env->make('template_auth.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cms-blog-laravel-versi-8\resources\views/login/login.blade.php ENDPATH**/ ?>