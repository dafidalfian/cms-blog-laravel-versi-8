@extends('backend.head')
@section('title','Tambah User')
@section('isi')

<div class="row">
	<div class="col">
		<div class="card shadow">
			<div class="card-body">
				<form method="post" action="{{url('dashboard/user')}}" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label>Nama Lengkap</label>
						<input type="text" name="nama" class="form-control" placeholder="Masukkan nama" required autofocus>
					</div>
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="username" class="form-control" placeholder="Masukkan Username">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" class="form-control" placeholder="Masukkan Email">
					</div>
					<!-- <div class="form-group">
						<label>Type Akun</label>
						<select class="form-control" name="tipe_akun">
							<option value="" holder>Pilih Type</option>
							<option value="1">Admin</option>
							<option value="0">Penulis</option>
						</select>
					</div> -->
					<div class="form-group">
                      <label class="d-block">Type Akun</label>
                      <div class="form-check">
                        <input class="form-check-input" name="tipe_akun" value="admin" type="checkbox" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                          Admin
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" name="tipe_akun" value="karyawan" type="checkbox" id="defaultCheck3">
                        <label class="form-check-label" for="defaultCheck3">
                          Karyawan
                        </label>
                      </div>
                    </div>

					<div class="form-group">
						<label>Tambah Foto</label>
						<input type="file" name="foto_pengguna" class="form-control">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control" placeholder="Masukkan password">
					</div>
					<button type="submit" class="btn btn-primary">Tambah</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection