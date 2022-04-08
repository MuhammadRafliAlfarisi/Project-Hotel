<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royale De Fly Hotel | Kamar</title>
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
        <a class="nav-link" href="{{ route('index') }}">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">|</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Kamar</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">|</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('fasilitas') }}">Fasilitas</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container row mt-3">
    <h1 class="text-center">Tipe Kamar</h1>
    <p class="mt-3">
        <h2 class="">Tipe Superior</h2>
    <div class="col">

    <img src="foto/Superior.jpg" alt="">
</p>
</div>
<div class="col">

    <h5 class="text-right my-3">
        Kamar Superior dengan ukuran 30 meter persegi memberikan
     ketenangan yang tepat untuk masa menginap yang santai.
    </h5>
    <h4 class="text-right my-3">
        RP 400.000,00 / Hari
    </h4>
    <button type="button" data-bs-toggle="modal" data-bs-target="#formreservasi" class="btn btn-primary">Reservasi</button>
</div>

</div>

<div class="container row mt-3">
    <p class="mt-3">
        <h2 class="">Tipe Deluxe</h2>
        <div class="col">
        <img src="foto/Deluxe.jpg" alt="">
    </p>
</div>
<div class="col">
  <h5 class="text-right my-3">
       Kamar Superior dengan ukuran 30 meter persegi memberikan
       ketenangan yang tepat untuk masa menginap yang santai.
  </h5>
  <h4 class="text-right my-3">
    RP 400.000,00 / Hari
</h4>
  <button type="button" data-bs-toggle="modal" data-bs-target="#formreservasi" class="btn btn-primary">Reservasi</button>
</div>

<div class="container row mt-3">
    <p class="mt-3">
        <h2 class="">Tipe Presidential</h2>
        <div class="col">
        <img src="foto/Deluxe.jpg" alt="">
       </p>
</div>
<div class="col">
  <h5 class="text-right my-3">
       Kamar Superior dengan ukuran 30 meter persegi memberikan
       ketenangan yang tepat untuk masa menginap yang santai.
  </h5>
  <h4 class="text-right my-3">
      RP 400.000,00 / Hari
  </h4>
  <button type="button" data-bs-toggle="modal" data-bs-target="#formreservasi" class="btn btn-primary">Reservasi</button>
</div>
<div class="modal fade" id="formreservasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <div class="input-group">
            <div class="input-group mb-3">
              <input type="text" name="no_handphone" class="form-control" id="no_handphone" placeholder="No Handphone">
            </div>
            <div class="input-group">
            <div class="input-group mb-3">
              <input type="date" name="tanggal_checkin" class="form-control" id="tanggal_checkin" placeholder="Tanggal CheckIn">
            </div>
            <div class="input-group">
            <div class="input-group mb-3">
              <input type="date" name="tanggal_checkout" class="form-control" id="tanggal_checkout" placeholder="Tanggal Checkout">
            </div>
            <div class="input-group">

                <select class="form-select" aria-label="Default select example">
                <option selected disabled>Tipe Kamar</option>
                <option disabled>-------------------</option>
                <option value="1">Superior</option>
                <option value="2">Deluxe</option>
                <option value="3">Presidential</option>
      </select>
              </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="button" data-bs-toggle="modal" data-bs-target="#konfirmasi" class="btn btn-primary">Konfirmasi</button>
        </div>
        <div class="modal fade" id="konfirmasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      </div>
    </div>
  </div>
</div>

</body>
</html>
