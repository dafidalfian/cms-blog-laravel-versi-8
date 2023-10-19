<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Pdf Postingan</title>
  </head>
  <body>

<div class="container">
<div class="row mt-3 mb-3">
	<div class="col-12">
		<div class="text-center">
			<h1>Data Postingan</h1>
			<p><sub>(<a href="https://webkampung.id" target="_blank"> https://webkampung.id </a>)</sub></p>
		</div>
		<div class="card shadow card-primary">
			<div class="card-header d-flex justify-content-between align-items-center">
			    <h2>Daftar Postingan</h2>
			 </div>
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
							</tr>
						</thead>
						<tbody>
							@php $i=1 @endphp
							@foreach($data as $postingan)
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
</div>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>