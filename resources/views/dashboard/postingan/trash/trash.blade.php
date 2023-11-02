@extends('backend.head')
@section('title','- Postingan')
@section('isi')

<div class="row">
	<div class="col-12">
		<div class="card shadow">
			<div class="card-header d-flex justify-content-between align-items-center">
			    
			    <form class="form-inline">
			      <input class="form-control" type="search" placeholder="Cari data trash">
			    </form>
			 </div>
			 @if(session('kambalikan'))
			 	<div class="alert alert-success">
			 		Postingan dengan judul "{{session('kambalikan')}}" berhasil di kembalikan.!! cek <a href="{{url('dashboard/postingan')}}"><b><u>Data postingan</u></b></a>
			 	</div>
			 @endif
			 @if(session('permanen'))
			 	<div class="alert alert-danger">
			 		Postingan dengan judul "{{session('permanen')}}" berhasil di hapus permanen.
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
								<th>Thumbnail</th>
								<th style="text-align: center">Pilihan</th>
							</tr>
						</thead>
						<tbody>
							@php $i=1 @endphp
							@foreach($data_hapus as $postingan)
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
											<a href=""><span class="badge badge-success badge-xs mb-2">{{$tag->nama_tag}}</span></a>
										@endforeach
									</td>
									<td>
										@if($postingan->foto_postingan)
											<center><img src="{{asset('storage/'.$postingan->foto_postingan)}}" style="border:3px solid blue; border-radius: 10px; width:100px; height: 100px" class="mb-2 mt-2"></center>
										@else 
											<img src="{{asset('storage/postingan_foto/not-thumb/
											no-photo.png')}}" style="border:3px solid blue; border-radius: 80%; width:100px; margin-left: auto; margin-right: auto; display: block;" class="mb-2 mt-2">
										@endif
									</td>
									<td>
										<form method="post" action="{{url('dashboard/postingan/trash/rest/'. $postingan->id)}}">
											@csrf
											@method('delete')
											<a href="{{url('dashboard/postingan/trash/rest/'.$postingan->id)}}" class="btn btn-warning"><i class="fas fa-pen"></i></a>
											<button type="submit" onclick="return confirm('Yakin hapus permanen?')" class="btn btn-danger"><i class="fas fa-trash"></i></button>
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