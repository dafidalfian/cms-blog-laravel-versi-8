@extends('backend.head')
@section('title','SuperAkun')
@section('isi')
<div class="row">
	<div class="col">
		<div class="card shadow">
			<div class="card-body">
			<a href="{{url('dashboard/my/akun/tambah_akun')}}" class="btn btn-primary mb-3">Tambah SuperUser</a>
			@if(session('status'))
				<div class="alert alert-success">
					{{session('status')}}
				</div>
			@endif

			<h4>Perhatian !</h4>
			<ul type="disc">
				<li>Pastikan login dengan akun anda sendiri.</li>
				<li>Anda tidak bisa menghapus akun yang lain,</li>
				<li>Karena saat anda login dengan akun anda otomatis akun yang lain terkunci.</li>
			</ul>
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
							@foreach($datasuperuser as $indata)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>
									<img src="{{asset('storage/'.$indata->foto_pengguna)}}" style="width: 100px; height: 100px;" class="card-img-top bg-secondary m-1">
								</td>
								<td>
									@if($indata->email_verified_at == true)
									<span class="badge badge-success"><i class="fas fa-check"></i> Verify</span>
									@else
									<span class="badge badge-danger"><i class="fas fa-times"></i> Not Verify</span>
									@endif
								</td>
								<td>{{$indata->nama}}</td>
								<td>{{$indata->username}}</td>
								<td>{{$indata->email}}</td>
								<td>
									<span class="badge badge-success">{{$indata->tipe_akun}}</span>
								</td>
								<td>
									@if(auth()->check() && auth()->user()->id == $indata->id)
										<form method="post" action="{{url('dashboard/my/akun/'.$indata->id)}}">
											@csrf
											@method('delete')
											<a href="{{url('dashboard/my/akun/'.$indata->id)}}/edit" class="btn btn-primary btn-sm">edit</a>
											<button type="submit" class="btn btn-danger btn-sm">hapus</button>
										</form>
									@else
										<h1 class="text-center"><i class="fa fa-user-lock fa-lg" style="color: #e2a808;"></i></h1>
									@endif
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