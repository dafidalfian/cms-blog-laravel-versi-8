<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lupa password ?</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="https://getbootstrap.com/docs/4.3/examples/floating-labels/floating-labels.css">
  </head>
  <body>

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-6 col-md-12 col-sm-12">
          <div class="card">
          <div class="card-body">
            @if(session('success'))
              <div class="alert alert-success">
                {{session('success')}}
              </div>
            @endif
            @if(session('error'))
              <div class="alert alert-danger">
                {{session('error')}}
              </div>
            @endif
          <form class="form-signin" method="post" action="{{ url('folder_file_reset/lupa_sandi') }}">
            @csrf

            <div class="text-center mb-4">
              <h1 class="h3 mb-3 font-weight-normal">Lupa Password</h1>
              <small>Kami akan mengirimkan link tautan untuk mengatur ulang kata sandi Anda</small>
            </div>

            <div class="form-label-group">
              <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
              <label for="inputEmail">Email address</label>
            </div>
            
            <button class="btn btn-lg btn-primary btn-block" type="submit">Kirim</button>

            <!-- or -->
            <div class="d-flex justify-content-center align-items-center mt-3">
              <hr class="w-25">
              <span class="px-2">Login with social</span>
              <hr class="w-25">
            </div>

            <div class="row g-sm-2 text-white">
              <div class="col-6">
                <a class="btn btn-block btn-social btn-danger" href="{{route('google.login')}}">
                  <span class="fab fa-facebook"></span> Google
                </a>
              </div>
              <div class="col-6">
                <a class="btn btn-block btn-social btn-primary" href="{{route('facebook.login')}}">
                  <span class="fab fa-twitter"></span> Facebook
                </a>                                
              </div>
            </div>
            <!-- End or -->

            <small class="d-block text-center mt-3">Not registered? <a href="/register">Register Now!</a></small>
            <p class="mt-5 mb-3 text-muted text-center">Versi 1.0</p>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
  </body>
</html>
