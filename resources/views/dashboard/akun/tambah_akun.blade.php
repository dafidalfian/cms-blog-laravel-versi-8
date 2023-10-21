@extends('backend.head')
@section('title','Tambah Data SuperUser')
@section('isi')
<div class="row">
	<div class="col">
		<div class="card shadow">
			<div class="card-body">
				<form method="post" action="{{url('dashboard/my/akun')}}" enctype="multipart/form-data">
					@csrf
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Nama Depan</label>
								<input type="text" name="nama" class="form-control" placeholder="Nama Depan" value="{{old('nama')}}">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Nama Belakang</label>
								<input type="text" name="nama_belakang" class="form-control" placeholder="Nama Belakang">
							</div>
						</div>
						
					</div>
					<div class="form-group">
						<label>Username</label>
						<input type="username" name="username" class="form-control" placeholder="Masukkan Username" value="{{old('username')}}">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" class="form-control" placeholder="Masukkan Email">
					</div>

					<div class="form-group">
                      <label class="d-block">Type Akun</label>
                      <div class="form-check">
                        <input class="form-check-input" name="tipe_akun" value="superuser" type="checkbox" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                          Superuser
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" name="tipe_akun" value="admin" type="checkbox" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck2">
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
                    	<label>Tambahkan Foto</label>
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