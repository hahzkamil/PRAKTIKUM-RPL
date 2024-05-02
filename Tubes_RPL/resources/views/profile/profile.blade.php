@extends ('layout.main')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f0f0f0;
      margin: 0;
      padding: 0;
    }

    .Profile_Saya {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
      text-align: center;
    }

    .profile-container {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-bottom: 20px;
    }

    .profile-1 {
      max-width: 100%; /* Memastikan gambar tidak melebihi lebar container */
      height: auto; /* Mengikuti proporsi gambar */
      border-radius: 50%;
    }

    .edit-container {
      margin-top: 10px;
    }

    .edit-link {
      text-decoration: none;
      color: #000;
    }

    .edit {
      padding: 5px 10px;
      border: 1px solid #000;
      border-radius: 5px;
    }

    .gaitsa-zahira-shafa,
    .id-consumer-123456789,
    .jl-telekomunikasi-1-terusan-buahbatu-bojongsoang-telkom-university-sukapura-kec-dayeuhkolot-kabupaten-bandung-jawa-barat-40257,
    .gaitsagmail-com-081122334455-perempuan {
      margin-bottom: 10px;
    }
  </style>
  <title>Profile Saya</title>
</head>
<body>
  <div class="Profile_Saya">
    <div class="profile-container">
      <img class="profile-1" src="../assets/vectors/profile2_x2.svg" alt="Profile Picture">
      <div class="gaitsa-zahira-shafa">GAITSA ZAHIRA SHAFA</div>
      <div class="id-consumer-123456789">
        ID CONSUMER<br>
        123456789
      </div>
      <div class="jl-telekomunikasi-1-terusan-buahbatu-bojongsoang-telkom-university-sukapura-kec-dayeuhkolot-kabupaten-bandung-jawa-barat-40257">
        Jl. Telekomunikasi. 1, Terusan Buahbatu - Bojongsoang, Telkom University, Sukapura, <br>
        Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40257 
      </div>
      <div class="gaitsagmail-com-081122334455-perempuan">
        <a href="edit_profile.html" class="edit-link">gaitsa@gmail.com</a><br>
        <a href="edit_profile.html" class="edit-link">081122334455</a><br>
        <a href="edit_profile.html" class="edit-link">Perempuan</a>
      </div>
    </div>
    <div class="edit-container">
      <a href="edit_profile.html" class="edit-link">
        <span class="edit">Edit</span>
      </a>
    </div>
  </div>
</body>
</html>

@endsection