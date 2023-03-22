@extends('backend.head')
@section('title','Data User')
@section('isi')
<div class="row">
	<div class="col">
		<div class="card shadow">
			<div class="card-body">
			<a href="{{url('dashboard/user/create')}}" class="btn btn-primary mb-3">Tambah User</a>

			<!-- Jika berhasil -->
			@if(session('success'))
				<div class="alert alert-success">
					{{session('success')}}
				</div>
			@endif
			<!-- Jika di hapus -->
			@if(session('hapus'))
				<div class="alert alert-success">
					{{session('hapus')}}
				</div>
			@endif
				<div class="table table-responsive">
					<table class="table table-bordered">
						<thead class="table-primary">
							<tr>
								<th>ID No</th>
								<th>Foto</th>
								<th>Nama</th>
								<th>Username</th>
								<th>Email</th>
								<th>Type Akun</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							@foreach($data_user as $hasil)
								<tr>
									<td>{{$hasil->id}}</td>
									<td>
										<img src="{{asset('storage/'.$hasil->foto_pengguna)}}" class="card-img-top img-thumbnail bg-secondary m-1" style="width: 100px; height: 100px;">
									</td>
									<td>{{$hasil->nama}}</td>
									<td>{{$hasil->username}}</td>
									<td>{{$hasil->email}}</td>
									<td>
										@if($hasil->tipe_akun == 1)
											<span class="badge badge-success">Admin</span>
										@endif
										@if($hasil->tipe_akun == 0)
											<span class="badge badge-warning">Penulis</span>
										@endif
									</td>
									<td>
									<form method="post" action="{{url('dashboard/user/'.$hasil->id)}}">
										@csrf
										@method('delete')
										<input type="hidden" name="{{$hasil->foto_pengguna}}">
										<a href="/dashboard/user/{{$hasil->id}}/edit" class="btn btn-primary">edit</a>
										<button type="submit" onclick="return confirm('Yakin hapus?')" class="btn btn-danger">hapus</button>
									</form>
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection