<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/donasi.css') }}">

  <script>
    function toggleButton() {
        var checkbox = document.getElementById('agreeCheckbox');
        var submitButton = document.getElementById('submitButton');
        submitButton.disabled = !checkbox.checked;
    }
  </script>
</head>
<body id="donasi">
  <div class="container-xl mt-5">
    <div class="card">
      <div class="card-body">
        <p>Kami sangat menghargai privasi Anda dan berkomitmen untuk melindungi informasi pribadi Anda. 
            Syarat dan Ketentuan ini menjelaskan bagaimana kami mengumpulkan, menggunakan, dan melindungi informasi 
            yang Anda berikan melalui aplikasi dan situs web kami. Dengan menggunakan aplikasi dan situs web FIshOn!, 
            Anda setuju dengan praktik pengumpulan dan penggunaan informasi yang dijelaskan dalam Syarat dan Ketentuan ini.
        </p>
            
        <p><strong>2. Informasi yang Kami Kumpulkan</strong></p>    
        <p>Kami mengumpulkan beberapa jenis informasi dari pengguna aplikasi dan situs web kami, 
            termasuk namun tidak terbatas pada:
        </p>

        <dl class="row">
            <dt class="col-sm-3">Informasi Pribadi</dt>
            <dd class="col-sm-9">Nama, alamat email, nomor telepon, dan informasi lain yang Anda berikan secara sukarela saat mendaftar atau menggunakan layanan kami.</dd>

            <dt class="col-sm-3">Informasi Transaksi</dt>
            <dd class="col-sm-9">Rincian transaksi yang Anda lakukan, termasuk jumlah, tanggal, dan tujuan transaksi.</dd>

            <dt class="col-sm-3">Informasi Teknis</dt>
            <dd class="col-sm-9">Alamat IP, jenis perangkat, jenis browser, dan data penggunaan aplikasi atau situs web lainnya yang dikumpulkan secara otomatis saat Anda mengunjungi atau menggunakan layanan kami.</dd>
        </dl>

        <p><strong>3. Penggunaan Informasi</strong></p>    
        <p>Kami mengumpulkan informasi dari pengguna aplikasi dan situs web kami untuk berbagai tujuan, termasuk namun tidak terbatas pada:
        </p>

        <ul class="list-unstyled">
            <li>Memproses dan mengelola transaksi Anda melalui aplikasi kami.</li>
            <li>Mengirimkan pemberitahuan terkait transaksi Anda dan perkembangan terkait program kami.</li>
            <li>Menyediakan dukungan pelanggan dan menanggapi pertanyaan atau keluhan Anda.</li>
            <li>Meningkatkan aplikasi dan situs web kami serta layanan yang kami tawarkan.</li>
            <li>Melakukan analisis untuk memahami pola transaksi dan meningkatkan strategi bisnis kami.</li>
        </ul>

        <p><strong>4. Perlindungan Informasi</strong></p>    
        <p>Kami mengambil langkah-langkah yang wajar untuk melindungi informasi pribadi Anda dari akses, penggunaan, 
            atau pengungkapan yang tidak sah. Kami menggunakan berbagai teknologi dan prosedur keamanan untuk membantu 
            melindungi informasi pribadi Anda.
        </p>

        <p><strong>5. Pengungkapan Informasi</strong></p>    
        <p>Kami tidak akan menjual, menyewakan, atau menukar informasi pribadi Anda kepada pihak ketiga tanpa 
            persetujuan Anda, kecuali sebagaimana dijelaskan dalam Syarat dan Ketentuan ini. Kami mungkin membagikan 
            informasi pribadi Anda dengan:
        </p>

        <dl class="row">
            <dt class="col-sm-3">Mitra Usaha</dt>
            <dd class="col-sm-9">Untuk memastikan transaksi Anda diproses dan layanan kami diberikan sesuai dengan niat Anda.</dd>

            <dt class="col-sm-3">Penyedia Layanan</dt>
            <dd class="col-sm-9">Yang membantu kami dalam mengoperasikan aplikasi atau situs web kami atau melaksanakan layanan atas nama kami, seperti pemrosesan pembayaran atau pengiriman email.</dd>

            <dt class="col-sm-3">Pihak Ketiga Lainnya</dt>
            <dd class="col-sm-9">Jika diwajibkan oleh hukum atau jika kami percaya bahwa pengungkapan tersebut diperlukan untuk melindungi hak, properti, atau keselamatan FIshOn!, pengguna kami, atau orang lain.</dd>
        </dl>

        <p><strong>6. Hak Anda</strong></p>    
        <p>Anda memiliki hak untuk mengakses, memperbarui, atau menghapus informasi pribadi Anda yang kami miliki.
             Jika Anda ingin melakukan salah satu dari tindakan ini, silakan hubungi kami melalui informasi kontak 
             yang tersedia di aplikasi atau situs web kami.
        </p>

        <p><strong>7. Perubahan pada Syarat dan Ketentuan</strong></p>    
        <p>Kami dapat memperbarui Syarat dan Ketentuan ini dari waktu ke waktu. Setiap perubahan akan diumumkan di 
            halaman ini, dan jika perubahan tersebut signifikan, kami akan memberikan pemberitahuan yang lebih 
            menonjol.
        </p>

        <p><strong>8. Kontak Kami</strong></p>    
        <p>Jika Anda memiliki pertanyaan atau kekhawatiran tentang Syarat dan Ketentuan ini atau praktik privasi kami, 
            silakan hubungi kami di:
        </p>

        <ul class="list-unstyled">
            <li>Email: kontak@fishon.org</li>
            <li>Telepon: +62-123-456-789</li>
        </ul>

        <div class="mt-3">
          
          <a href="signup" class="btn btn-secondary">Kembali</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFyZjG6sFK0L0xdlFYBJMcR5j2NT4q2Y6p6Xg6sUwVtO3KM6MKE1LT7slP" crossorigin="anonymous">
  </script>
</body>
</html>
