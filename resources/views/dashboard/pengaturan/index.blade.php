@extends('backend.head')
@section('title','Konfigurasi Website')
@section('isi')

<div class="row">
	<div class="col-12">
		<div class="card shadow">
			<div class="card-body">
				<h3>Pengaturan website</h3>
				@if(session('status'))
					<div class="alert alert-success">
						{{session('status')}}
					</div>
				@endif
<<<<<<< HEAD
				<form method="post" action="{{url('dashboard/pengaturan/'.$set->id)}}" enctype="multipart/form-data">
=======
				<form method="post" action="{{url('dashboard/pengaturan/'.$set->id)}}">
>>>>>>> f018c561e7241d03d442c8fd27b2a604320221f7
					@csrf
					<input type="hidden" name="id" value="{{$set->id}}">
					<div class="form-group">
						<label>Judul</label>
						<input type="text" name="judul_situs" value="{{$set->judul_situs}}" class="form-control" placeholder="Judul situs">
					</div>
					<div class="form-group">
						<label>Deskripsi</label>
						<input type="text" name="deskripsi_situs" placeholder="Deskripsi situs ..." class="form-control" value="{{$set->deskripsi_situs}}">
					</div>
					<div class="form-group">
<<<<<<< HEAD
						<label>Ganti icon situs</label>
						<img src="<?php echo asset('storage/'. $set->icon_situs) ?>" style="border:3px solid blue; border-radius: 10px;" class="mb-2 mt-2" width="100px" height="100px">
						<input type="file" name="icon_situs" class="form-control">
					</div>
					<div class="form-group">
						<label>Ganti logo situs</label>
						<input type="file" name="logo_situs" class="form-control">
					</div>
					<div class="form-group">
						<label>Ganti utama situs</label>
						<input type="file" name="logo_utama_situs" class="form-control">
=======
						<label>Ganti icon</label>
						<input type="file" name="icon" class="form-control">
					</div>
					<div class="form-group">
						<label>Ganti Logo</label>
						<input type="file" name="logo" class="form-control">
>>>>>>> f018c561e7241d03d442c8fd27b2a604320221f7
					</div>
					<button type="submit" class="btn btn-primary btn-sm">Save</button>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection