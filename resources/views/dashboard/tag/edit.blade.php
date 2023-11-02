@extends('backend.head')
@section('title','Edit Tag')
@section('isi')

<div class="row">
	<div class="col-md-4">
		<div class="card shadow card-primary">
			<div class="card-body">
				<h3>Edit data</h3>
				<div class="flash" tampil-pesan="<?php echo session('flash') ?>"></div>
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