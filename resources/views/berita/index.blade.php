
    
    <!-- awal jumbtronn -->
    <section class="jumbotron-bg">
      <div class="jumbotron warna-bg text-white">
        <div class="container">
        <h1 class="display-4"><b>{{$title}} !</b></h1>
        <p class="lead">{{$site->deskripsi_situs}}</p>
        
        <a class="btn btn-primary btn-lg" href="" role="button">Selengkapnya</a>
        </div>
      </div>
    </section>
    <!-- akhir jumbotrom -->

    <div class="container">
      <div class="row">
        <!-- Post -->
        <div class="col-md-8">
          <div class="row">
            @foreach($berita as $hasil)
            <div class="col-md-6">
              <div class="card shadow mb-3">
                <img src="{{asset('storage/'.$hasil->foto_postingan)}}" class="card-img-top">
                <div class="card-body">
                  @foreach($hasil->tags as $result)
                  <a href="{{url('tag/'.$result->nama_tag)}}" target="_blank">
                    <span class="badge badge-success"># {{$result->nama_tag}}</span>
                  </a>
                  @endforeach
                  <div class="small text-muted"><i class="fa fa-clock-o"></i> {{$hasil->created_at->isoFormat('dddd, D MMMM Y')}}</div>
                  <a href="{{url('kategori/'.$hasil->category->nama_kategori)}}">
                    <span class="badge badge-primary"><i class="fa fa-tags"></i> {{ $hasil->category->nama_kategori }}</span>
                  </a>
                  <h4 class="card-title "><a href="{{url('/baca/'. $hasil->slug)}}" class="text-success">{{$hasil->judul}}</a></h4>
                  <p class="card-text">{{substr($hasil->isi_postingan,0,100)}}</p>
                  <i class="fa fa-pencil-square-o"></i> {{ $hasil->users->nama }}
                  <a class="float-right text-success" href="{{url('/baca/'. $hasil->slug)}}">Read more →</a>
<!--                   <a class="float-right text-success" href="{{ url('/baca/' . $hasil->id . '/' . $hasil->slug) }}">Read more →</a> -->
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
        <!-- Sidebar -->
        <div class="col-md-4">
          <div class="card shadow">
            <div class="card-body bg-light">
              <h5 class="card-title">Susah Belajar Pemrogramman ?</h5>
              <p class="card-text">Dapatkan panduan dan tips eksklusif dari Ngodingpintar untuk membantumu belajar pemrogramman</p>
              <form>
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" class="form-control">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Ya, Saya Mau!</button>
              </form>
            </div>
          </div>
        </div>
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
<<<<<<< HEAD
            <h2>What is Lorem Ipsum?</h2>
            <p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
=======
            <h2>Download Ebook belajar html dan css dasar untuk pemula gratis</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
>>>>>>> f018c561e7241d03d442c8fd27b2a604320221f7
            <button type="button" class="btn btn-primary">Primary</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir jumbotron 2 -->
    