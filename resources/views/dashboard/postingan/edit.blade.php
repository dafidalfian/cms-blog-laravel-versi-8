@extends('backend.head')
@section('title','- Edit Postingan')
@section('isi')

<div class="row">
	<div class="col-12">
		<div class="card shadow">
			<div class="card-body">
				<h3>Tambah postingan</h3>
				<form method="post" action="{{url('dashboard/postingan/'.$editDataPost->id)}}" enctype="multipart/form-data">
					@csrf
					@method('patch')
					<div class="form-group">
						<label>Judul Postingan</label>
						<input type="text" name="judul" class="form-control" placeholder="Tulis judul" value="{{$editDataPost->judul}}">
					</div>
					<div class="form-group">
						<label>Edit Kategori</label>
						<select class="form-control" name="category_id">
							<option value="" holder>Pilih Kategori</option>
							@foreach($datakategori as $hasil)
								<option value="{{$hasil->id}}"
									@if($hasil->id == $editDataPost->category_id)
										selected
									@endif 
									>{{$hasil->nama_kategori}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label>Edit Tag</label>
						<select class="form-control select2" name="tags[]" multiple>
							<option value="" holder>Pilih tag</option>
							@foreach($datatag as $tag)
							<option value="{{$tag->id}}"
								@foreach($editDataPost->tags as $nilai)
								@if($nilai->id == $tag->id)
								selected
								@endif
								@endforeach
								>{{$tag->nama_tag}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label>Edit Artikel</label>
						<textarea class="form-control" name="isi_postingan" placeholder="Tulis artikel">{{$editDataPost->isi_postingan}}</textarea>
					</div>
					<div class="form-group">
						<label>Edit Thumbnail</label><br>
						<input type="hidden" name="oldFoto" value="{{$editDataPost->foto_postingan}}">
							@if($editDataPost->foto_postingan)
								<img src="{{asset('storage/'.$editDataPost->foto_postingan)}}" style="border:3px solid blue; border-radius: 10px; width:100px; height: 100px" class="mb-2 mt-2">
							@else 
								<img src="{{asset('storage/postingan_foto/not-thumb/
								no-photo.png')}}" style="border:3px solid blue; border-radius: 80%; width:100px;" class="mb-2 mt-2">
							@endif
						<input type="file" name="foto_postingan" class="form-control">
					</div>
					<button type="submit" class="btn btn-primary btn-sm">Save</button>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection