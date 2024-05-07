<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IKAN - Masuk Akun Anda</title>
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
</head>
<body>
    <div>
        <h1>IKAN</h1>
        <h2>Masuk Akun Anda</h2>
        
        <form action="/login" method="POST">
            <input type="text" placeholder="Nama" name="nama">
            <input type="email" placeholder="Email" name="email">
            <input type="password" placeholder="Password" name="password">
            <button type="submit">Selanjutnya</button>
        </form>

        <p>- atau -</p>
        <a href="/login">Sudah Memiliki Akun? Masuk</a>
    </div>
</body>
</html>
<?php /**PATH D:\TUBES RPL\Tubes_RPL\resources\views/landing/signup.blade.php ENDPATH**/ ?>