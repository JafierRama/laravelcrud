<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="{{ asset('assets') }}/theme.css" type="text/css"> </head>

  <body class="w-100" id="01">
    <nav class="navbar navbar-expand-md bg-secondary navbar-dark">
      <div class="container">
        <a class="navbar-brand" href="{{url('/')}}" id="smr">SME Micro Risk Group</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('pegawai.index')}}">Data Pegawai</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('atasan1') }}">Data Atasan&nbsp;</a>
            </li>
              <li class="nav-item">
              <a class="nav-link" href="exin2.html">Hasil Exin</a>
            </li>
            <div class="btn-group">
              <button class="btn dropdown-toggle btn-success" data-toggle="dropdown">Tambah Data</button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('pegawai.create') }}">Coaching</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="exin.php">Exit Interview</a>
              </div>
            </ul>
            <form class="form-inline m-0">
              <input class="form-control mr-2" type="text" placeholder="Search" id="cari">
              <button class="btn btn-primary" type="submit" id="tombol_cari">Search</button>
            </form>
          </div>
        </div>
      </nav>
      @yield('content')
      <div class="text-white p-1 bg-secondary">
        <div class="row">
          <div class="col-md-6 text-center align-self-center">
            <p class="mb-5 text-center m-3">
              <strong>SME Micro Risk Group</strong>
              <br>Plaza Mandiri 27th Floor&nbsp;
              <br>Jl. Jend Gatot Subroto Kav. 36-38
              <br>Jakarta 12190, Indonesia
              <br>
              <abbr title="Phone">Telp :</abbr> (62-21) 3002 3000</p>
              <div class="row">
                <div class="col-md-12 mt-3 text-center">
                  <p>© Copyright 2018 SME &amp; Micro Risk Group - All rights reserved.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 p-0" align="center">
              <img class="img-src rounded img-fluid my-4" width="500" height="400" src="{{ asset('assets')}}/gambar/download.png"> </div>
            </div>
          </div>
          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        </body>

        </html>