 @extends('backend.head')
@section('title','Edit User')
@section('isi')

<div class="row">
	<div class="col">
		<div class="card shadow">
			<div class="card-body">
				<form method="post" action="{{url('dashboard/user/'.$data_edit->id)}}" enctype="multipart/form-data">
					@csrf
					@method('patch')
					<div class="form-group">
						<label>Nama Lengkap</label>
						<input type="text" name="nama" class="form-control" value="{{$data_edit->nama}}" placeholder="Masukkan nama" required autofocus>
					</div>
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="username" value="{{$data_edit->username}}" class="form-control" placeholder="Masukkan Username">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" value="{{$data_edit->email}}" class="form-control" placeholder="Masukkan Email">
					</div>
					<div class="form-group">
						<label>Type Akun</label>
						<select class="form-control" name="tipe_akun">
							<option value="1"
							@if($data_edit->tipe_akun == 1)
							selected
							@endif
							>Admin</option>
							<option value="0"
							@if($data_edit->tipe_akun == 0)
							selected
							@endif
							>Penulis</option>
						</select>
					</div>
					<input type="hidden" name="newFoto" value="{{$data_edit->foto_pengguna}}">
					<div class="form-group">
						<label>Ubah Foto</label>
						<br>
						<img src="{{asset('storage/'.$data_edit->foto_pengguna)}}" height="100px" width="100px">
						<input type="file" name="foto_pengguna" class="form-control">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control">
					</div>
					<button type="submit" class="btn btn-primary">Update</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection