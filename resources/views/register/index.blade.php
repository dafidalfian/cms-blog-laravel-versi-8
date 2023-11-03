@extends('template_auth.head')
@section('title','Register')
@section('content')
      <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <img src="<?php $logo = DB::table('pengaturan')->first();?>{{asset('storage/'.$logo->icon_situs)}}" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card shadow card-primary">
              <div class="card-header"><h4>Register</h4></div>

              <div class="card-body">
                <form method="post" action="{{url('/register')}}" enctype="multipart/form-data">
                  @csrf

                  @if(session('success'))
                  <div class="alert alert-success">
                    <h4>{{session('success')}}</h4>
                    <hr class="mb-0">
                    <p class="mb-0">Cek email anda untuk verifikasi akun !</p>
                  </div>
                  @endif

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="frist_name">Nama</label>
                      <input id="frist_name" type="text" class="form-control" name="nama" autofocus>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="username">Username</label>
                    <input id="username" type="username" class="form-control" name="username">
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email">
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="password" class="d-block">Password</label>
                    <input id="password" type="password" class="form-control pwstrength"name="password">
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                      <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
                  </div>
                  <div class="text-center mt-4 mb-3">
                  <div class="text-job text-muted">Login With Social</div>
                </div>
                <div class="row sm-gutters">
                  <div class="col-6">
                    <a class="btn btn-block btn-social btn-facebook" href="{{route('facebook.login')}}">
                      <span class="fab fa-facebook"></span> Facebook
                    </a>
                  </div>
                  <div class="col-6">
                    <a class="btn btn-block btn-social btn-google" href="{{route('google.login')}}">
                      <span class="fab fa-google"></span> Google
                    </a>                                
                  </div>
                </div>
                </form>
              </div>
            </div>
            <small class="d-block text-center mt-3">Already registered? <a href="/login">Login</a></small>
            <p class="mt-5 mb-3 text-muted text-center">Versi 1.0</p>
          </div>
        </div>
@endsection