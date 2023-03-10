<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="icon" href="{{asset('assets/img/icon.png')}}">
    <title>Srikandi Batik | @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/navbar.css') }}">

    
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-light md-col-11 fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ "/" }}">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="Bootstrap" width="140" height="50">
                  </a>              
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('user/user') }}">Cataloge</a>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Produk
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{route('produk.view')}}">View Produk</a></li>
                      <li><a class="dropdown-item" href="{{ route('produk.add') }}">Tambah Produk</a></li>
                    </ul>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Pakaian Wanita
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{route('produk.view')}}">View Detail-Produk</a></li>
                      <li><a class="dropdown-item" href="{{ route('produk.add') }}">Tambah Detail-Produk</a></li>
                    </ul>
                  </li>

                  {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Pesanan
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{route('produk.view')}}">View Pesanan</a></li>
                      <li><a class="dropdown-item" href="{{ route('produk.add') }}">Tambah Pesanan</a></li>
                    </ul>
                  </li> --}}

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Aneka Kain Batik
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">view Pesanan_Detail</a></li>
                      <li><a class="dropdown-item" href="#">Tambah Pesanan_Detail</a></li>
                    </ul>
                  </li>

  

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Profile
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{route('produk.view')}}">View Kurir</a></li>
                      <li><a class="dropdown-item" href="{{ route('produk.add') }}">Tambah Kurir</a></li>
                    </ul>
                  </li>

                  {{-- <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Profile</a>
                  </li> --}}

                </ul>
              </div>

              @if (Auth::check() == true)
                <div class="d-grid gap-2 d-md-flex justify-content-md-end md-col-5">
                        <div class="d-flex p-2">
                          <a href="{{ url('Barang/cekout') }}"><i class="bi bi-cart-fill"></i></a><h6></h6>
                        </div>
                        <div class="dropdown">
                          <a class="btn  nama dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Hi,   <b>{{ Auth::user()->name }}</b>
                          </a>                      
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('user/logout') }}">Log Out</a></li>

                          </ul>
                        </div>
              @else
                        <a class="btn btn-outline-light ms-1" href="{{ url('user/login') }}">Masuk</a>
                        <a class="btn btn-light ms-1" href="{{ url('user/daftar') }}">Daftar</a>
              @endif      
            </div>
          </nav>
        </div>
</head>
<body>

@yield('content')



<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
@include('sweetalert::alert')
</body>
</html>