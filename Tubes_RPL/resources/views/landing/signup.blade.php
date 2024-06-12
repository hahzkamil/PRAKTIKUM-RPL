<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FishOn! - Daftar Akun Baru</title>
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
        <h1>FishOn</h1>
        <h2>Daftar Akun Baru</h2>

        <!-- Menampilkan pesan sukses atau error -->
        @if (session('success'))
            <div style="color: green;">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div style="color: red;">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('register') }}" method="POST">
            @csrf
            <input type="text" placeholder="Nama" name="nama_consumer">
            <input type="email" placeholder="Email" name="email_consumer">
            <input type="password" placeholder="Password" name="password">
            <button type="submit">Daftar</button>
        </form>

        <p>- atau -</p>
        <a href="{{ route('login') }}">Sudah Memiliki Akun? Masuk</a>
    </div>
</body>
</html>
