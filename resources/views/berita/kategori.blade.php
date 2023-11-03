<!-- awal jumbtronn -->
<section class="jumbotron-bg">
  <div class="jumbotron warna-bg text-white">
    <div class="container">
    @isset($kate)
    <h1 class="display-4">kategori: <b>{{$kate->nama_kategori}}</b></h1>
    @endisset
    @if(!isset($kate))
    <h1 class="display-4">Semua Postingan</h1>
    @endif
    </div>
  </div>
</section>
<!-- akhir jumbotrom -->

    

    <div class="container">
      <div class="row">
        <!-- Start List Kategori -->
        <div class="col-md-8">
        	@if($berita->isNotEmpty())
        	@foreach($berita as $hasil)
        	<div class="card shadow mb-3">
			  <div class="row no-gutters">
			    <div class="col-md-4">
			      <img src="{{asset('storage/'.$hasil->foto_postingan)}}" class="card-img img-fluid" style="object-fit: cover;" alt="...">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			      	<div class="text-muted fst-italic mb-2">
			      	@foreach($hasil->tags as $result)
                  <a href="{{url('tag/'.$result->slug)}}"><span class="badge badge-success"># {{$result->nama_tag}}</span></a>
                  @endforeach
                  <br>
			      	<a href="{{url('kategori/'.$hasil->category->slug)}}"><span class="badge badge-primary"><i class="fa fa-tags"></i> {{ $hasil->category->nama_kategori }} </span></a>
			      	<i class="fa fa-clock-o"></i> {{$hasil->created_at->isoFormat('dddd, D MMMM Y')}}</div>
			        <h5 class="card-title"><a href="{{url('/baca/'. $hasil->slug)}}" class="text-success">{{$hasil->judul}}</a></h5>
			        <p class="card-text">{{substr($hasil->isi_postingan,0,120)}}.</p>
			        <i class="fa fa-pencil-square-o"></i> {{ $hasil->users->nama }}
			        <a href="{{url('/baca/'. $hasil->slug)}}" class="float-right text-success mb-3">Selengkapnya ...</a>
			      </div>
			    </div>
			  </div>
			</div>
        	@endforeach
        	@else
        	<h4>Postingan tidak ada</h4>
        	@endif
        </div>
        <!-- End List Kategori -->
        <!-- Start Widget -->
	    <div class="col-md-4">
	    	<!-- Start Widget Tags -->
	    	<div class="card shadow mb-3">
		        <div class="card-header">Daftar Tags</div>
		        @foreach($tag as $hasil)
		        <a class="btn btn-primary mt-1 mb-1" href="{{url('tag/'.$hasil->slug)}}"># {{$hasil->nama_tag}}</a>
		        @endforeach
		     </div>
		     <!-- End Widget Tags -->
		     <!-- Start Widget Kategori -->
	      <div class="card shadow mb-3">
	        <div class="card-header">Daftar Kategori</div>
	        <div class="card-body">
	          <ul class="list-unstyled mb-0">
	            @foreach($kategori as $hasil)
	            <li><a href="{{url('kategori/'.$hasil->slug)}}">{{$hasil->nama_kategori}}<span class="float-right">{{$hasil->posts->count()}}</span></a></li><hr>
	            @endforeach
	          </ul>
	        </div>
	      </div>
	      <!-- End Widget Kategori -->
	      <!-- Start Widget Postingan -->
	      <h5>Tutorial Terbaru</h5>
	      <div class="list-group">
	        <a href="#" class="list-group-item list-group-item-action active">
	          <div class="d-flex w-100 justify-content-between">
	            <h5 class="mb-1">List group item heading</h5>
	            <small>3 days ago</small>
	          </div>
	          <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
	          <small>Donec id elit non mi porta.</small>
	        </a>
	        <a href="#" class="list-group-item list-group-item-action">
	          <div class="d-flex w-100 justify-content-between">
	            <h5 class="mb-1">List group item heading</h5>
	            <small class="text-muted">3 days ago</small>
	          </div>
	          <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
	          <small class="text-muted">Donec id elit non mi porta.</small>
	        </a>
	      </div>
	      <!-- End widget postingan -->
	    </div>
	    <!-- End Widget -->
      </div>
    </div>

    <!-- Awal pagination -->
    <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center">

      </ul>
    </nav>
    <!-- Akhir pagination -->

    <!-- Awal jumbotron 2 -->
    <div class="jumbotron jumbotron-fluid bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-3 mb-3">
            <img src="{{asset('tema/img/gambar_buku.png')}}" class="img-thumbnail">
          </div>
          <div class="col-md-9">
            <h2>Download Ebook belajar html dan css dasar untuk pemula gratis</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <button type="button" class="btn btn-primary">Primary</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir jumbotron 2 -->
    