@extends('backend.head')
@section('title','- Tambah Postingan')
@section('isi')

<div class="row">
	<div class="col-12">
		<div class="card shadow">
			<div class="card-body">
				<h3>Tambah postingan</h3>
				<form method="post" action="{{url('dashboard/postingan')}}" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label>Judul Postingan</label>
						<input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" placeholder="Tulis judul">
						@error('judul')
							<div class="invalid-feedback">
								{{$message}}
							</div>
						@enderror
					</div>
					<div class="form-group">
						<label>Kategori</label>
						<select class="form-control" name="category_id">
							<option value="" holder>Pilih Kategori</option>
							@foreach($datakategori as $hasil)
								<option value="{{$hasil->id}}">{{$hasil->nama_kategori}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label>Postingan</label>
						<textarea class="form-control" name="isi_postingan" placeholder="Tulis artikel"></textarea>
					</div>
					<div class="form-group">
						<label>Add Tag</label>
						<select class="form-control select2" name="tags[]" multiple>
							@foreach($dataTags as $hasil)
								<option value="{{$hasil->id}}">{{$hasil->nama_tag}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label>Thumbnail</label>
						<input type="file" name="foto_postingan" class="form-control">
					</div>
					<button type="submit" class="btn btn-primary btn-sm">Save</button>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection