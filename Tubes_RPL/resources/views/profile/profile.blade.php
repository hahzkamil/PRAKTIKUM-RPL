@extends('layout.main')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Profile Saya</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
    .profile-card {
      margin-top: 50px;
      border: none;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
    }
    .profile-1 {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      object-fit: cover;
    }
    .profile-info p {
      margin: 10px 0;
    }
    .edit-container {
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card profile-card text-center">
          <div class="card-body">
            <img class="profile-1 mb-3" src="https://static.vecteezy.com/system/resources/thumbnails/005/544/718/small_2x/profile-icon-design-free-vector.jpg" alt="Profile Picture">
            <h4 class="mt-3 mb-1">GAITSA ZAHIRA SHAFA</h4>
            <p class="text-muted mb-3"><strong>ID CONSUMER</strong><br>123456789</p>
            <div class="profile-info">
              <p class="text-muted"><strong>Jl. Telekomunikasi. 1, Terusan Buahbatu - Bojongsoang, Telkom University, Sukapura,
              Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40257</strong></p>
              <p class="text-muted">gaitsa@gmail.com</p>
              <p class="text-muted">081122334455</p>
            </div>
            <div class="edit-container">
              <a href="editprofile" class="btn btn-primary">Edit</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>

@endsection
