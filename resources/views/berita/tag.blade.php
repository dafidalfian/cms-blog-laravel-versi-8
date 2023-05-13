<!-- awal jumbtronn -->
<section class="jumbotron-bg">
  <div class="jumbotron warna-bg text-white">
    <div class="container">
    <h1 class="display-4">Tag: <b></b></h1>
    </div>
  </div>
</section>
<!-- akhir jumbotrom -->

<div class="container">
    <div class="row">
        <!-- Start List Tag -->
        <div class="col-md-8">
            @if($berita->isNotEmpty())
            @foreach($berita as $hasil)
            <div class="card shadow mb-3">
              <div class="row no-gutters">
                <div class="col-md-4">
                  <img src="{{asset('storage/'.$hasil->foto_postingan)}}" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <div class="text-muted fst-italic mb-2">
                    @foreach($hasil->tags as $result)
                      <a href="{{url('tag/'.$result->slug)}}"><span class="badge badge-success"># {{$result->nama_tag}}</span></a>
                    @endforeach
                  <br>
                    <a href="{{url('kategori/'.$hasil->category->slug)}}"><span class="badge badge-primary"><i class="fa fa-tags"></i> {{$hasil->category->nama_kategori}} </span></a>
                    <i class="fa fa-clock-o"></i> {{$hasil->created_at->isoFormat('dddd, D MMMM YYYY')}}</div>
                    <h5 class="card-title"><a href="{{url('baca/'.$hasil->slug)}}" class="text-success">{{$hasil->judul}}</a></h5>
                    <p class="card-text">{{$hasil->isi_postingan}}.</p>
                    <i class="fa fa-pencil-square-o"></i> 
                    <a href="{{url('baca/'.$hasil->slug)}}" class="float-right text-success mb-3">Selengkapnya ...</a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            @else
            <h4>Postingan tag Tidak ada</h4>
            @endif
        </div>
        <!-- End List Tag -->
        <!-- Start Widget -->
        <div class="col-md-4">
            <!-- Start Widget Tag -->
            <div class="card shadow mb-3">
                <div class="card-header">Daftar Tags</div>
                @foreach($tag as $hasil)
                <a href="{{url('tag/'.$hasil->slug)}}" class="btn btn-primary mt-1 mb-1"># {{$hasil->nama_tag}}</a>
                @endforeach
            </div>
            <!-- End Widget Tag -->
            <!-- Start Widget Kategori -->
            <div class="card shadow mb-3">
                <div class="card-header">Daftar Kategori</div>
                <div class="card-body">
                    <ul class="list-unstyled mb-0">
                        @foreach($kategori as $hasil)
                        <li>
                            <a href="{{url('kategori/'.$hasil->slug)}}">{{$hasil->nama_kategori}} <span class="float-right">{{$hasil->posts->count()}}</span></a>
                        </li><hr>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- ENd Widget Kategori -->
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
