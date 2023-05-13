@extends('backend.head')
@section('title','Show List Barcode')

@section('isi')

<div class="row">
	<div class="col">
		<div class="card shadow">
			<div class="card-body">
				<a href="{{url('dashboard/barcode/tambah')}}" class="btn btn-primary my-2">Tambah</a>
				@if(session('status'))
					<div class="alert alert-success">
						{{session('status')}}
					</div>
				@endif

				<table class="table table-bordered">
					<thead class="table-primary">
						<tr>
							<th>ID</th>
							<th>Nama</th>
							<th>Kode Nama</th>
						</tr>
					</thead>
					<tbody>
						@foreach($bar as $hasil)
						<tr>
							<td>{{$hasil->id}}</td>
							<td>{{$hasil->nama}}</td>
							<td class="bg-secondary p-2 text-center">
								<strong>
								{!! QrCode::margin(2)->color(255, 0, 0)->size(150)->generate($hasil->kode_nama) !!}
								<br>
								Atau
								<br>
								<img src="data:image/png;base64, {{ base64_encode(QrCode::margin(2)->size(200)->format('png')->merge(public_path('images/wedos.png'),0.3, true)->generate('hacker internasional')) }}">
								<br>
								{{$hasil->kode_nama}}
								</strong>
							</td>
						</tr>
						@endforeach

					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection