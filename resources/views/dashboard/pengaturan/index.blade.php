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
				<form method="post" action="{{url('dashboard/pengaturan/'.$set->id)}}">
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
					<button type="submit" class="btn btn-primary btn-sm">Save</button>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection