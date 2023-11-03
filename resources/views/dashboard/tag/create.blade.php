@extends('backend.head')
@section('title','Tambah Tag')
@section('isi')

<div class="row">
	<div class="col-md-4">
		<div class="card shadow card-primary">
			<div class="card-body">
				<h3>Tambah data</h3>
				@if(session('status'))
					<div class="alert alert-success">
						{{session('status')}}
					</div>
				@endif
				<form method="post" action="/dashboard/tag">
					{{csrf_field()}}
					<div class="form-group">
						<label>Buat tag</label>
						<input type="text" name="nama_tag" class="form-control" autofocus="On" placeholder="Tulis disini ...">
					</div>
					<div class="form-group">
						<label>Deskripsi</label>
						<textarea name="deskripsi" class="form-control" placeholder="Tulis deskripsi ..."></textarea>
					</div>
					<div class="form-group">
						<div class="footer text-right">
							<button type="submit" class="btn btn-primary btn-sm">Save</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="col-md-8">
		<div class="card shadow card-success">
			<div class="card-body">
				<div class="table table-responsive">
					<table class="table table-stripped table-bordered table-sm table-hover">
						<thead>
							<tr>
								<th>#</th>
								<th>Nama Tag</th>
								<th>Deskripsi</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							@if(session('status_ok'))
								<div class="alert alert-danger">
									{{session('status_ok')}}
								</div>
							@endif
							@php $i=1;@endphp
							@foreach($data_tag as $hasil)
								<tr>
									<td>{{$i++}}</td>
									<td>{{$hasil->nama_tag}}</td>
									@if($hasil->deskripsi)
										<td>{{$hasil->deskripsi}}</td>
									@else
										<td>No Deskripsi</td>
									@endif
									<td>
										<form method="post" action="{{url('dashboard/tag/'.$hasil->id)}}">
											@csrf
											@method('delete')
											<a href="{{url('dashboard/tag/edit/'.$hasil->id)}}" class="btn btn-primary btn-sm">edit</a>
											<button type="submit" class="btn btn-danger	btn-sm">hapus</button>
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