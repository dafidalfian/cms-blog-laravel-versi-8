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
								<th>Status</th>
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
										<img src="{{asset('storage/'.$hasil->foto_pengguna)}}" class="card-img-top bg-secondary m-1" style="width: 100px; height: 100px;">
									</td>
									<td>
										@if($hasil->email_verified_at == true)
											<span class="badge badge-success"><i class="fas fa-check"></i> Verifikasi</span>
										@else
											<span class="badge badge-danger"><i class="fas fa-times"></i> Belum Verifikasi</span>
										@endif
									</td>
									<td>{{$hasil->nama}}</td>
									<td>{{$hasil->username}}</td>
									<td>{{$hasil->email}}</td>
									<td>
										@if($hasil->tipe_akun =='superuser')
											<span class="badge badge-success">SuperUser</span>
										@elseif($hasil->tipe_akun =='admin')
											<span class="badge badge-warning">Admin</span>
										@else
											<span class="badge badge-secondary">Karyawan</span>
										@endif
									</td>
									<td>
									<form method="post" action="{{url('dashboard/user/'.$hasil->id)}}">
										@csrf
										@method('delete')
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
@push('file_css')
<style type="text/css">
	.card-img-top {
  border: 3px solid #007bff;
}

</style>
@endpush