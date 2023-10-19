@extends('backend.head')
@section('title','Edit Tag')
@section('isi')

<div class="row">
	<div class="col-md-4">
		<div class="card shadow card-primary">
			<div class="card-body">
				<h3>Edit data</h3>
<<<<<<< HEAD
				<div class="flash" tampil-pesan="<?php echo session('flash') ?>"></div>
=======
				@if(session('status'))
					<div class="alert alert-success">
						{{session('status')}}
					</div>
				@endif
>>>>>>> f018c561e7241d03d442c8fd27b2a604320221f7
				<form method="post" action="/dashboard/tag/{{$edit_tag->id}}">
					{{csrf_field()}}
					@method('patch')
					<div class="form-group">
						<label>Edit tag</label>
						<input type="text" value="{{$edit_tag->nama_tag}}" name="nama_tag" class="form-control" autofocus="On" placeholder="Edit disini ...">
					</div>
					<div class="form-group">
						<label>Deskripsi</label>
						<textarea name="deskripsi" class="form-control" placeholder="Edit deskripsi ..." placeholder="Tulis deskripsi tag">{{$edit_tag->deskripsi}}</textarea>
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