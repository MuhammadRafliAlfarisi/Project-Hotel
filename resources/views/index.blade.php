<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royale De Fly Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg text-light navbar-dark navbar-custom">
  <div class="container d-flex">
    <a class="navbar-brand" href="#">ROYALE DE FLY HOTEL</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">|</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('kamar')}}">Kamar</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">|</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('fasilitas') }}">Fasilitas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">  <button type="button" data-bs-toggle="modal" data-bs-target="#login" class="btn btn-primary">Login</button></a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="foto/19-THE-18TH.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="foto/32-THE-POOL.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="foto/41-THE-SPA2.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>

<div class="container d-flex mb-5">
  <div class="col-3 me-5">

  <input class="form-control rounded-pill" placeholder="Cek In"type="date" id="Cek-In"name="Cek-In">
  </div>
  <div class="col-3 me-5">

  <input class="form-control rounded-pill" placeholder="Cek Out"type="date" id="Cek-Out"name="Cek-Out">
  </div>
  <div class="col-3 me-5">

  <input class="form-control rounded-pill" placeholder="Jumlah Kamar"type="number" id="Jumlah-Kamar"name="Jumlah-kamar">
  </div>
  <button type="button" data-bs-toggle="modal" data-bs-target="#formPemesanan" class="btn btn-primary">Pesan</button>
</div>

<div class="row mt-3">
    <div class="col">
            <h2 class="">Fasilitas</h2>
            <img src="foto/KolamRenang.jpg" width="100%" alt="">
            <a href="/fasilitas">
                <button style="width: 100%" type="button" data-bs-toggle="modal" data-bs-target="#" class="btn btn-primary">Selengkapnya</button>
                </a>
    </div>
    <div class="col">
            <h2 class="">Kamar</h2>
            <img src="foto/Deluxe.jpg" width="100%" alt="">
            <a href="/kamar">
                <button style="width: 100%" type="button" data-bs-toggle="modal" data-bs-target="#" class="btn btn-primary">Selengkapnya</button>
                </a>
    </div>
</div>

<div class="container mt-5">
<h1 class="text-center">Tentang Kami</h1>
<p class="mt-3">Introducing Indonesia’s reference in luxury hospitality, The Trans Luxury Hotel. A creation by Trans Corporation, it is a sophisticated blend of Indonesian tradition with a refined contemporary interpretation, right in the heart of Bandung city, together with Trans Studio Bandung - one of the biggest indoor theme parks in the world, Trans Studio Mall, ibis Bandung Trans Studio and Masjid Agung Trans Studio Bandung.
</p>
</div>

<footer class="bg-light" style="margin-top: 20vh">
    <div class="container text-dark">
        <div class="d-flex flex-row justify-content-center pt-3 pb-0">
            <p class="">© Copyright Royale De Fly Hotel - 2022</p>
        </div>
    </div>
</footer>

<div class="modal fade" id="formPemesanan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog text-dark">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Pemesanan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div class="input-group mb-3">
            <input type="text" name="nama_pemesan" class="form-control" id="nama_pemesan" placeholder="Nama Pemesan">
          </div>
          <div class="input-group mb-3">
            <input type="text" name="email" class="form-control" id="email" placeholder="Email">
          </div>
          <div class="input-group mb-3">
            <input type="text" name="no_handphone" class="form-control" id="no_handphone" placeholder="No Handphone">
          </div>
          <div class="input-group mb-3">
            <input type="text" name="nama_tamu" class="form-control" id="nama_tamu" placeholder="Nama Tamu">
          </div>
          <div class="input-group">

            <select class="form-select" aria-label="Default select example">
            <option selected disabled>Tipe Kamar</option>
            <option disabled>-------------------</option>
            <option value="1">Superior</option>
            <option value="2">Deluxe</option>
  </select>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary">Konfirmasi</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog text-dark">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form action="/login" method="post">
            @csrf
            <div class="input-group mb-3">
                <input type="text" name="username" class="form-control" id="username" placeholder="Username">
            </div>
            <div class="input-group mb-3">
                <input type="text" name="password" class="form-control" id="password" placeholder="Password">
            </div>
            <div class="input-group">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
    </div>
  </div>
</div>

</body>
</html>
