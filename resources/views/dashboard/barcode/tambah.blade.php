@extends('backend.head')
@section('title','Tambah kode')

@section('isi')

<div class="row">
	<div class="col">
		<div class="card shadow">
			<div class="card-body">
				<h1>Form tambah barcode</h1>

				@if(session('status'))
					<div class="alert alert-success">
						{{session('status')}}
					</div>
				@endif

				<form method="post" action="{{url('dashboard/barcode')}}" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label>Nama anda</label>
						<input type="text" name="nama" class="form-control" placeholder="Masukkan nama" autofocus="On">
					</div>
					<div class="form-group">
						<label>Nama kode</label>
						<input type="text" name="kode_nama" class="form-control" placeholder="Kode">
					</div>
					<div class="form-check">
					    <input class="form-check-input" type="checkbox" name="logo" value="yes">
					    <label class="form-check-label" for="includeLogo">Masukkan Logo ?</label>
					</div>

					<button type="submit" class="btn btn-primary">Simpan</button>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection