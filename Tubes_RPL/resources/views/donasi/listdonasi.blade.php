@extends ('layout.main')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>List Donasi</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
    .donation-header {
      text-align: center;
      margin-bottom: 50px;
    }
    .donation-card {
      margin-bottom: 30px;
    }
    .donation-card img {
      width: 100%;
      height: auto;
    }
    .donation-card .card-body {
      text-align: center;
    }
    .donation-card .card-title {
      font-weight: 600;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <div class="donation-header">
      <h1>Donasi</h1>
      <p>Bersama-sama kita dapat membuat perbedaan. Mari berdonasi untuk membantu mereka yang membutuhkan.</p>
    </div>
    <div class="row">
      <div class="col-md-4 donation-card">
        <div class="card">
          <img src="https://storage.googleapis.com/flip-prod-mktg-strapi/media-library/air_bersih_570f39708c/air_bersih_570f39708c.jpg" class="card-img-top" alt="Wujudkan Air Bersih">
          <div class="card-body">
            <h5 class="card-title">Wujudkan Air Bersih</h5>
            <p class="card-text">Riau</p>
            <a href="tampilandonasi" class="btn btn-primary">SEE THE DETAIL</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 donation-card">
        <div class="card">
          <img src="https://static.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/p2/28/2023/07/03/IMG-20230703-WA0005-4003338550.jpg" class="card-img-top" alt="Aksi Hijau Untuk Pesisir">
          <div class="card-body">
            <h5 class="card-title">Aksi Hijau Untuk Pesisir</h5>
            <p class="card-text">Aceh</p>
            <a href="tampilandonasi" class="btn btn-primary">SEE THE DETAIL</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 donation-card">
        <div class="card">
          <img src="https://cdn.antaranews.com/cache/1200x800/2019/09/12/Gerakan-Bersih-Laut-Dan-Pantai-120919-Aws-6.jpg" class="card-img-top" alt="Pembersihan Pantai">
          <div class="card-body">
            <h5 class="card-title">Pembersihan Pantai</h5>
            <p class="card-text">Bandung</p>
            <a href="tampilandonasi" class="btn btn-primary">SEE THE DETAIL</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 donation-card">
        <div class="card">
          <img src="https://img.okezone.com/content/2023/11/19/525/2923155/rangkul-milenial-ganjartivity-gelar-bersih-bersih-pantai-pangandaran-6bD0J7Td3c.jpg" class="card-img-top" alt="Peduli Ekosistem Pantai">
          <div class="card-body">
            <h5 class="card-title">Peduli Ekosistem Pantai</h5>
            <p class="card-text">NTT</p>
            <a href="tampilandonasi" class="btn btn-primary">SEE THE DETAIL</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 donation-card">
        <div class="card">
          <img src="https://pict.sindonews.net/dyn/850/pena/news/2022/10/26/34/923779/ekosistem-laut-yang-sehat-jadi-fondasi-ekonomi-biru-guo.jpg" class="card-img-top" alt="Jaga Keindahan Pantai">
          <div class="card-body">
            <h5 class="card-title">Jaga Keindahan Pantai</h5>
            <p class="card-text">Yogyakarta</p>
            <a href="tampilandonasi" class="btn btn-primary">SEE THE DETAIL</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 donation-card">
        <div class="card">
          <img src="https://b3268101.smushcdn.com/3268101/wp-content/uploads/2019/11/GP0STRP0N_.jpg?lossy=2&strip=1&webp=1" class="card-img-top" alt="Laut Biru, Laut Sehat">
          <div class="card-body">
            <h5 class="card-title">Laut Biru, Laut Sehat</h5>
            <p class="card-text">Makassar</p>
            <a href="tampilandonasi" class="btn btn-primary">SEE THE DETAIL</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

@endsection
