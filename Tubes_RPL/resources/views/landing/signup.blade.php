<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FishOn! - Masuk Akun Anda</title>
    <style>
        div {
            font-family: Arial, sans-serif;
            max-width: 400px;
            margin: auto;
        }
        h1 {
            color: black;
        }
        h2 {
            color: grey;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"],
        button[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid grey;
        }
        button[type="submit"] {
            background-color: lightblue;
            border: none;
        }
        p {
            color: black;
        }
        a {
            color: black;
        }
    </style>
    <script>
        function toggleButton() {
            var checkbox = document.getElementById('agreeCheckbox');
            var submitButton = document.getElementById('submitButton');
            submitButton.disabled = !checkbox.checked;
        }
    </script>
</head>
<body>
    <div>
        <h1>IKAN</h1>
        <h2>Masuk Akun Anda</h2>
        
        <form action="/login" method="GET">
            <input type="text" placeholder="Nama" name="nama" required>
            <input type="email" placeholder="Email" name="email" required>
            <input type="password" placeholder="Password" name="password" required>
            <input type="checkbox" id="agreeCheckbox" onclick="toggleButton()"> Saya setuju dengan <a href="kebijakanprivasi">Syarat dan Ketentuan</a>
            <br><br>
            <button type="submit" id="submitButton" disabled>Selanjutnya</button>
            <a type="button" class="btn btn-warning mt-3" href="/kebijakanprivasi">Pelajari Lebih Lanjut</a>
        </form>

        <p>- atau -</p>
        <a href="/login">Sudah Memiliki Akun? Masuk</a>
    </div>
</body>
</html>