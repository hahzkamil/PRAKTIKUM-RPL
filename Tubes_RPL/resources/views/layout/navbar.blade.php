<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link to your CSS file -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <title>Your Laravel App</title>
</head>
<body>

<nav class="navbar nav-underline navbar-expand-lg navbar-black" style="background-color: #6AB4DD;">
    <a class="navbar-brand" href="#">
    </a>
    <div class="container justify-content-center">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-grow-0" id="navbarNav">
            <ul class="navbar-nav text-center">
                <li class="nav-item">
                    <a class="nav-link" href="#"><strong>Catalog</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><strong>Daftar Mitra</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><strong>Perkiraan cuaca</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><strong>About Us</strong></a>
                </li>
            </ul>
        </div>
    </div>
    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a href="#" class="button button-white">Join Us</a>
        </li>
        <li class="nav-item">
            <a href="#" class="button button-blue">Login</a>
        </li>
    </ul>
</nav>
</body>
</html>
