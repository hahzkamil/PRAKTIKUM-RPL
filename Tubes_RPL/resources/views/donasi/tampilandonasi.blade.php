@extends ('layout.main')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tampilan Donasi</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
    .donation-detail {
      margin-top: 50px;
    }
    .donation-detail img {
      width: 50%;
      height: auto;
      display: block;
      margin: 0 auto;
    }
    .donation-detail .progress {
      height: 20px;
    }
    .donation-detail .card-body {
      text-align: center;
    }
    .donation-detail .card-title {
      font-weight: 600;
      font-size: 24px;
    }
    .donation-detail .card-text {
      margin-bottom: 20px;
    }
    .donation-detail .btn-donate {
      background-color: #007bff;
      color: white;
      font-size: 16px;
      padding: 10px 20px;
      border-radius: 50px;
    }
  </style>
</head>
<body>
  <div class="container donation-detail">
    <div class="row">
      <div class="col-md-12">
        <img src="https://img.okezone.com/content/2023/11/19/525/2923155/rangkul-milenial-ganjartivity-gelar-bersih-bersih-pantai-pangandaran-6bD0J7Td3c.jpg" class="img-fluid" alt="Peduli Ekosistem Laut">
      </div>
      <div class="col-md-12 text-center mt-3">
        <h3 class="card-title">Peduli Ekosistem Laut</h3>
        <p class="card-text">IDR 5.000.000 dana terkumpul dari IDR 20.000.000</p>
        <div class="progress mb-3">
          <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <p class="card-text">2.000 Donators</p>
        <p class="card-text">NTT</p>
        <div class="card">
          <div class="card-body">
            <p class="card-text">Menjaga ekosistem laut, penting untuk mengurangi polusi dengan menghindari pembuangan sampah dan bahan kimia ke laut. Menjaga habitat laut seperti terumbu karang, hutan bakau, dan padang lamun juga merupakan langkah penting. <a href="#">Baca Lebih Lanjut</a></p>
          </div>
        </div>
        <a href="#" class="btn btn-primary btn-donate mt-4">Donasi Sekarang</a>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

@endsection
