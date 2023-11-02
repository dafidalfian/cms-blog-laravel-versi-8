<div class="container mt-3 mb-3">
  <div class="row">
    <div class="col-md-8">
      <div class="card shadow mb-3">
        <div class="card-body bg-light">
          @foreach($berita->tags as $result)
          <a href="{{url('tag/'.$result->slug)}}"><span class="badge badge-success"># {{$result->nama_tag}}</span></a>
          @endforeach
          <hr>
          <a href="{{url('kategori/'.$berita->category->nama_kategori)}}">
            <span class="badge badge-primary"><i class="fa fa-tags"></i> {{$berita->category->nama_kategori}}</span>
          </a>
          <h1 class="card-title">{{$berita->judul}}</h1>
          <div class="mb-3">
            <i class="fa fa-clock-o"></i> {{$berita->created_at->isoFormat('dddd, D MMMM Y')}} - <i class="fa fa-pencil-square-o"></i> <a href="">{{$berita->users->nama}}</a>
          </div><hr>
          <img src="{{asset('storage/'.$berita->foto_postingan)}}" class="card-img-top">
          <p class="card-text mt-3">{{$berita->isi_postingan}}</p>
        </div>
      </div>
    </div>
    <!-- Start Widget -->
    <div class="col-md-4">
      <!-- Start Widget Tags -->
      <div class="card shadow mb-3">
        <div class="card-header">Daftar Tags</div>
        @foreach($tag as $hasil)
        <a class="btn btn-primary mt-1 mb-1" target="_blank" href="{{url('tag/'.$hasil->slug)}}"># {{$hasil->nama_tag}}</a>
        @endforeach
      </div>
      <!-- End Widget Tags -->
      <!-- Start Widget Kategori -->
      <div class="card shadow mb-3">
        <div class="card-header">Daftar Kategori</div>
        <div class="card-body">
          <ul class="list-unstyled mb-0">
            @foreach($kategori as $hasil)
            <li><a href="{{url('kategori/'.$hasil->slug)}}">{{$hasil->nama_kategori}} <span class="float-right">{{$hasil->posts->count()}}</span></a></li>
            <hr>
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