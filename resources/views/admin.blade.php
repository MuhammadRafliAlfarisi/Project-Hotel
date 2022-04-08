<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royale De Fly Hotel | Admin</title>
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
                <a class="nav-link active" aria-current="page" href="#">Kamar</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="#">|</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('fasilitaskamar')}}">Fasilitas Kamar</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="#">|</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('fasilitashotel') }}">Fasilitas Hotel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">  <button type="button" data-bs-toggle="modal" data-bs-target="#logout" class="btn btn-primary">Logout</button></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="d-flex justify-content-end me-3 mb-3">
        <a href="">
            <img src="foto/icons8-plus-48.png" alt="">
        </a>
    </div>

<table class="table table-bordered text-white">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Tipe Kamar</th>
        <th scope="col">Jumlah Kamar</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Superior</td>
        <td>100</td>
        <td>
            <a href="">Ubah</a>
            |
            <a href="">Lihat</a>
        </td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Deluxe</td>
        <td>50</td>
        <td>
            <a href="">Ubah</a>
            |
            <a href="">Lihat</a>
        </td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Presidential</td>
        <td>30</td>
        <td>
            <a href="">Ubah</a>
            |
            <a href="">Lihat</a>
        </td>
      </tr>
    </tbody>
  </table>

  <div class="modal fade" id="logout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog text-dark">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Log Out</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">Apakah anda yakin ingin Log Out?</div>
        <div class="modal-footer">
            <form action="/logout" method="post">
                @csrf
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Konfirmasi</button>
            </form>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
