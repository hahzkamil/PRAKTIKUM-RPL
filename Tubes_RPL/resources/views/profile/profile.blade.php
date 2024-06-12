@extends ('layout.main')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Profile Saya</title>
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body text-center">
            <img class="profile-1" src="../assets/vectors/profile2_x2.svg" alt="Profile Picture">
            <h4 class="mt-3 mb-0">GAITSA ZAHIRA SHAFA</h4>
            <p class="text-muted"><strong>ID CONSUMER</strong><br>123456789</p>
            <p class="text-muted"><strong>Jl. Telekomunikasi. 1, Terusan Buahbatu - Bojongsoang, Telkom University, Sukapura,
            Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40257</strong><br></p>
            <p class="text-muted">gaitsa@gmail.com</p>
            <p class="text-muted">081122334455</p>
            <div class="edit-container">
              <a href="edit_profile.html" class="btn btn-primary">Edit</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>


@endsection
