@extends('backend.head')
@section('title','Tambah Data SuperUser')
@section('isi')
<div class="row">
	<div class="col">
		<div class="card shadow">
			<div class="card-body">
				<form method="post" action="{{url('dashboard/my/akun/'.$user->id)}}" enctype="multipart/form-data">
					@csrf
					@method('patch')

					<input type="hidden" name="foto_lama" value="{{$user->foto_pengguna}}">

					<div class="form-group">
						<label>Nama Depan</label>
						<input type="text" name="nama" class="form-control" placeholder="Nama Depan" value="{{$user->nama}}">
					</div>
					<div class="form-group">
						<label>Username</label>
						<input type="username" name="username" class="form-control" placeholder="Masukkan Username" value="{{$user->username}}">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" class="form-control" placeholder="Masukkan Email" value="{{$user->email}}">
					</div>

					<div class="form-group">
                      <label class="d-block">Type Akun</label>
                      <div class="form-check">
                        <input class="form-check-input" name="tipe_akun" value="superuser" type="checkbox" id="defaultCheck1"
                        @if($user->tipe_akun == 'superuser')
                        checked 
                        @endif>
                        <label class="form-check-label" for="defaultCheck1">
                          Superuser
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" name="tipe_akun" value="admin" type="checkbox" id="defaultCheck1"
                        @if($user->tipe_akun == 'admin')
                        checked
                        @endif>
                        <label class="form-check-label" for="defaultCheck2">
                          Admin
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" name="tipe_akun" value="karyawan" type="checkbox" id="defaultCheck3"
                        @if($user->tipe_akun == 'karyawan')
                        checked
                        @endif>
                        <label class="form-check-label" for="defaultCheck3">
                          Karyawan
                        </label>
                      </div>
                    </div>

                    <div class="form-group">
                    	<label>Tambahkan Foto</label>
                    	<br>
                    	<img src="{{asset('storage/'.$user->foto_pengguna)}}" width="100px" height="100px" class="mb-2">
                    	<input type="file" name="foto_pengguna" class="form-control-file">
                    </div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control" placeholder="********">
					</div>
					<button type="submit" class="btn btn-primary btn-block">Simpan</button>
				</form>
			</div>
		</div>
	</div>
</div>





@endsection