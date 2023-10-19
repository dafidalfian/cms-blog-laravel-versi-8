@extends('backend.head')
@section('title','Edit Kategori')
@section('isi')

<div class="row">
	<div class="col-md-4">
		<div class="card shadow card-primary">
			<div class="card-body">
				<h3>Edit data</h3>
				@if(session('status'))
					<div class="alert alert-success">
						{{session('status')}}
					</div>
				@endif
				<form method="post" action="/dashboard/kategori/oke/{{$edit_kategori->id}}">
					{{csrf_field()}}
					@method('patch')
					<div class="form-group">
						<label>Edit kategori</label>
						<input type="text" value="{{$edit_kategori->nama_kategori}}" name="nama_kategori" class="form-control" autofocus="On" placeholder="Edit disini ...">
					</div>
					<div class="form-group">
						<label>Deskripsi</label>
						<textarea name="deskripsi" class="form-control" placeholder="Edit deskripsi ..." placeholder="Tulis deskripsi kategori">{{$edit_kategori->deskripsi}}</textarea>
					</div>
					<div class="form-group">
						<div class="footer text-right">
							<button type="submit" class="btn btn-primary btn-sm">Update</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!--  -->
</div>

@endsection