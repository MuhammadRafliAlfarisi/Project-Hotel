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
                <a class="nav-link" href="{{ route('admin') }}">Kamar</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="#">|</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Fasilitas Kamar</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="#">|</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('fasilitashotel') }}">Fasilitas Hotel</a>
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
            <th scope="col">Tipe Kamar</th>
            <th scope="col">Fasilitas Kamar</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Superior</td>
            <td>Kulkas</td>
            <td>
                <a href="">Ubah</a>
                |
                <a href="">Lihat</a>
            </td>
          </tr>
          <tr>
            <td>Deluxe</td>
            <td>AC</td>
            <td>
                <a href="">Ubah</a>
                |
                <a href="">Lihat</a>
            </td>
        </tr>
        <tr>
            <td>Presidential</td>
            <td>TV</td>
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
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
              <button type="button" class="btn btn-primary">Konfirmasi</button>
            </div>
          </div>
        </div>
      </div>

    </body>
</html>
