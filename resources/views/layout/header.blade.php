<header>
  <div class="container">
    <nav class="navbar navbar-expand-lg bg-light navbar-light">
      <a class="navbar-brand" href="/">Kampungku</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/list_post">Berita</a>
          </li>

          <!-- Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kategori</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              @foreach($kategori as $hasil)
              <a href="{{url('kategori/'.$hasil->slug)}}" class="dropdown-item">{{$hasil->nama_kategori}}</a>
              @endforeach
            </div>
          </li>
          <!-- End Dropdown -->

          <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
          </li>
        </ul>

        <form class="form-inline my-2 my-lg-0 mx-auto">
          <input class="form-control mr-sm-2" type="search" placeholder="Search">
          <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
        </form>

        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white font-weight-bold rounded" href="/login" id="btn-pengajuan"><i class="fa fa-sign-in"></i> Login</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</header>


<!-- bcup -->
<!-- <header>
      <div class="container">
        <nav class="navbar navbar-expand-lg bg-light navbar-light">
          <a class="navbar-brand" href="/">Kampungku</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item active">
                <a class="nav-link" href="/">Home</a>
              </li> -->
              <!-- <li class="nav-item">
                <a class="nav-link" href="/kategori">Kategori</a>
              </li> -->

              <!-- <li class="nav-item">
                <a class="nav-link" href="/list_post">Berita</a>
              </li> -->

              <!-- Dropdown -->
              <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kategori</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  @foreach($kategori as $hasil)
                  <a href="{{url('kategori/'.$hasil->slug)}}" class="dropdown-item">{{$hasil->nama_kategori}}</a>
                  @endforeach
                </div>
              </li> -->
              <!-- End Dropdown -->
<!-- 
              <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/login">Login</a>
              </li>
              
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search">
              <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
        </nav>
      </div>
    </header> -->