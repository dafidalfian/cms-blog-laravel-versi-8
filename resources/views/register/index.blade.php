<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register | CMS LARAVEL 8</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="https://getbootstrap.com/docs/4.3/examples/floating-labels/floating-labels.css">
  </head>
  <body>
<<<<<<< HEAD
    <form class="form-signin" method="post" action="/register" enctype="multipart/form-data">
=======
    <form class="form-signin" method="post" action="/register">
>>>>>>> f018c561e7241d03d442c8fd27b2a604320221f7
      @csrf

      @if(session('success'))
      <div class="alert alert-success">
        <h4>{{session('success')}}</h4>
        <hr class="mb-0">
        <p class="mb-0">Cek email anda untuk verifikasi akun !</p>
      </div>
      @endif

      <div class="text-center mb-4">
        <h1 class="h3 mb-3 font-weight-normal">Register CMS LARAVEL8</h1>
      </div>

      <div class="form-label-group">
        <input type="text" name="nama" id="Nama" class="form-control" placeholder="Nama" required autofocus>
        <label for="Nama">Nama</label>
      </div>

      <div class="form-label-group">
        <input type="text" name="username" id="Username" class="form-control" placeholder="Username" required>
        <label for="Username">Username</label>
      </div>

      <div class="form-label-group">
        <input type="email" name="email" id="Email" class="form-control" placeholder="Email" required>
        <label for="Email">Email</label>
      </div>

      <div class="form-label-group">
        <input type="password" name="password" id="Password" class="form-control" placeholder="Password" required>
        <label for="Password">Password</label>
      </div>

<<<<<<< HEAD
      <div class="form-label">
        <label>Upload foto anda</label>
        <input type="file" name="foto_pengguna" class="form-control">
      </div>
      <br>

=======
>>>>>>> f018c561e7241d03d442c8fd27b2a604320221f7
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>

      <!-- Or -->
      <div class="d-flex justify-content-center align-items-center mt-1">
        <hr class="w-25">
        <span class="px-2">Register with social</span>
        <hr class="w-25">
      </div>

      <div class="row g-sm-2 text-white">
        <div class="col-6">
<<<<<<< HEAD
          <a class="btn btn-block btn-social btn-danger" href="{{route('google.login')}}">
=======
          <a class="btn btn-block btn-social btn-danger" href="#">
>>>>>>> f018c561e7241d03d442c8fd27b2a604320221f7
            <span class="fab fa-facebook"></span> Google
          </a>
        </div>
        <div class="col-6">
<<<<<<< HEAD
          <a class="btn btn-block btn-social btn-primary" href="{{route('facebook.login')}}">
=======
          <a class="btn btn-block btn-social btn-primary" href="#">
>>>>>>> f018c561e7241d03d442c8fd27b2a604320221f7
            <span class="fab fa-twitter"></span> Facebook
          </a>                                
        </div>
      </div>
      <!-- End Or -->

      <small class="d-block text-center mt-3">Already registered? <a href="/login">Login</a></small>
      <p class="mt-5 mb-3 text-muted text-center">Versi 1.0</p>
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
  </body>
</html>
