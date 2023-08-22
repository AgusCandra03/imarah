<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    </head>
    <body class="antialiased">
        <nav class="navbar navbar-expand-lg bg-danger navbar-dark">
            <div class="container">
              <a class="navbar-brand" href="{{ url('home') }}"><img src="{{ asset('assets/dist/img/logo.png') }}" alt="" width="150vw"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle me-1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Kategori Produk
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Digital Printing</a></li>
                      <li><a class="dropdown-item" href="#">Spanduk</a></li>
                      <li><a class="dropdown-item" href="#">Poster</a></li>
                    </ul>
                  </li>
                  <form class="search d-flex">
                    <input type="search" placeholder="Cari Produk" autocomplete="off">
                    <button type="submit" disabled>Search</button>
                  </form>
                  <li class="nav-item">
                    <a class="nav-link contact active" href="#"><i class='bx bxl-whatsapp'></i> Corporate 0821-1200-1230</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link contact active" href="#"><i class='bx bxl-whatsapp'></i> Retail 0813-6768-4580</a>
                  </li>
                  <li class="nav-item ms-auto">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/home') }}" class="nav-link active">Home <i class='bx bx-exit'></i></a>
                        @else
                            <a href="{{ route('login') }}" class="nav-link active">Log in <i class='bx bx-exit'></i></a>
                        @endauth
                    @endif
                  </li>
                </ul>
              </div>
            </div>
          </nav>

        <div id="produk">
            <div class="container">
                <div class="row">
                    <div class="card mx-2" style="width: 13rem;">
                        <img src="{{ asset('assets/dist/img/photo1.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                      <div class="card mx-2" style="width: 13rem;">
                        <img src="{{ asset('assets/dist/img/photo1.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card mx-2" style="width: 13rem;">
                        <img src="{{ asset('assets/dist/img/photo1.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div><div class="card mx-2" style="width: 13rem;">
                        <img src="{{ asset('assets/dist/img/photo1.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card mx-2" style="width: 13rem;">
                        <img src="{{ asset('assets/dist/img/photo1.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </body>
</html>
