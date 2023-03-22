@extends('backend.head')
@section('title','Edit User')
@section('isi')

<div class="row">
	<div class="col">
		<div class="card shadow">
			<div class="card-body">
				<form method="post" action="{{url('dashboard/user/'.$user->id)}}" enctype="multipart/form-data">
					@csrf
					@method('patch')
					<div class="form-group">
						<label>Nama Lengkap</label>
						<input type="text" name="nama" class="form-control" value="{{$user->nama}}" placeholder="Masukkan nama">
					</div>
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="username" value="{{$user->username}}" class="form-control" placeholder="Masukkan Username">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" value="{{$user->email}}" class="form-control" placeholder="Masukkan Email">
					</div>
					<div class="form-group">
						<label>Type Akun</label>
						<select class="form-control" name="tipe_akun">
							<option value="1"
							@if($user->tipe_akun == 1)
							selected
							@endif
							>Admin</option>
							<option value="0"
							@if($user->tipe_akun == 0)
							selected
							@endif
							>Penulis</option>
						</select>
					</div>
					<div class="form-group">
						<label>Ubah Foto</label>
						<br>
						<input type="hidden" name="foto_baru" value="{{$user->foto_pengguna}}">
						<img src="{{asset('storage/'.$user->foto_pengguna)}}" height="100px" width="100px">
						<input type="file" name="foto_pengguna" class="form-control">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control" value="{{$user->password}}">
					</div>
					<button type="submit" class="btn btn-primary">Update</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection