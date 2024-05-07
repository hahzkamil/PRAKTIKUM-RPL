@extends ('layout.main')

@section('content')

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Profile Pembeli</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="editProfilePembeli.css" />
  </head>
  <body>
    <div class="edit-profile-pembeli">
      <div class="edit-profile">
      Edit Profile 
      </div>
      <div class="kelola-informasi-profil-anda-untuk-mengontrol-melindungi-dan-mengamankan-akun">
      Kelola informasi profil Anda untuk mengontrol, melindungi dan mengamankan akun
      </div>
      <div class="nama-lengkap">
      Nama Lengkap
      </div>
      <div class="rectangle-5">
      </div>
      <div class="email">
      Email
      </div>
      <div class="container-1">
        <div class="container">
          <div class="rectangle-6">
          </div>
          <span class="password">
          Password
          </span>
        </div>
        <div class="iconly-bold-profile-1">
          <img class="profile-1" src="../assets/vectors/profile5_x2.svg" />
        </div>
      </div>
      <div class="container-5">
        <div class="container-4">
          <div class="rectangle-7">
          </div>
          <span class="alamat">
          Alamat
          </span>
        </div>
        <div class="container-2">
          <span class="pilih-gambar">
          Pilih Gambar
          </span>
        </div>
      </div>
      <div class="rectangle-9">
      </div>
      <div class="no-telepon">
      No Telepon
      </div>
      <div class="rectangle-8">
      </div>
      <div class="container-3">
        <span class="jenis-kelamin">
        Jenis Kelamin
        </span>
        <div class="ellipse-6">
        </div>
        <span class="laki-laki">
        Laki-Laki
        </span>
        <div class="ellipse-7">
        </div>
        <span class="perempuan">
        Perempuan
        </span>
      </div>
      <div class="container-6">
        <span class="simpan">
        Simpan
        </span>
      </div>
    </div>
  </body>
</html>

@endsection