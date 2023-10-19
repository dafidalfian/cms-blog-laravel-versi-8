@extends('backend.head')
@section('title','- Postingan')
@section('isi')

<div class="row">
	<div class="col-12">
		<div class="card shadow card-primary">
			<div class="card-header d-flex justify-content-between align-items-center">
			    <div class="card-body">
			    	<a href="{{url('dashboard/postingan/create')}}" class="btn btn-primary mb-2">Tambah</a>
			    	<a href="{{url('dashboard/postingan/aksi/cetak_pdf')}}" target="_blank" class="btn btn-danger mb-2">Export PDF</a>
			    </div>
			    <form class="form-inline mb-2">
			      <input class="form-control" type="search" placeholder="Cari data">
			    </form>
			 </div>
			 @if(session('status'))
					<div class="alert alert-success">
						{{session('status')}}
					</div>
				@endif
				@if(session('hapus'))
					<div class="alert alert-danger">
						Postingan : "{{session('hapus')}}" berhasil di hapus.!! cek <a href="{{url('dashboard/postingan/trash')}}"><b><u>Trash</u></b></a>
					</div>
				@endif
			<div class="card-body p-0" id="top-5-scroll" style="height: 50rem;">
				<div class="table table-responsive">
					<table class="table table-bordered table-hover">
						<thead bgcolor="lime">
							<tr>
								<th>#</th>
								<th>Judul</th>
								<th>Kategori</th>
								<th>Tag</th>
								<th>Author</th>
								<th>Thumbnail</th>
								<th style="text-align: center">Pilihan</th>
							</tr>
						</thead>
						<tbody>
							@php $i=1 @endphp
							@foreach($datapost as $postingan)
								<tr>
									<td>{{$i++}}</td>
									<td>{{$postingan->judul}}</td>
									<td>
										@if($postingan->category)
											<p>{{$postingan->category->nama_kategori}}</p>
										@elseif($postingan->category_id === null)
											<p>Kategori tidak ada</p>
										@else
											<p>Kategori sudah dihapus</p>
										@endif
									</td>
									<td>
										@foreach($postingan->tags as $tag)
											<a href=""><span class="badge badge-success badge-xs mb-2"># {{$tag->nama_tag}}</span></a>
										@endforeach
									</td>
									<td><a href="{{url('dashboard/postingan/'.$postingan->users->nama)}}">{{ucwords($postingan->users->nama)}}</a></td>
									<td>
										@if($postingan->foto_postingan)
											<center><img src="{{asset('storage/'.$postingan->foto_postingan)}}" style="border:3px solid blue; border-radius: 10px; width:100px; height: 100px" class="mb-2 mt-2"></center>
										@else 
											<img src="{{asset('storage/postingan_foto/not-thumb/
											no-photo.png')}}" style="border:3px solid blue; border-radius: 80%; width:100px; margin-left: auto; margin-right: auto; display: block;" class="mb-2 mt-2">
										@endif
									</td>
									<td>
										<form method="post" action="{{url('dashboard/postingan/'.$postingan->id)}}">
											@csrf
											@method('delete')
											<a href="{{url('dashboard/postingan/edit/'.$postingan->id)}}" class="btn btn-warning btn-sm mb-1"><i class="fas fa-pen"></i></a>
											<button type="submit" onclick="return confirm('Apakah anda yakin menghapus?') " class="btn btn-danger btn-sm mb-1"><i class="fas fa-trash"></i></button>
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