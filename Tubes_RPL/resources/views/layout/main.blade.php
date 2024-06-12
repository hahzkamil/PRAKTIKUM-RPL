<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    @yield('cssfile')
</head>
<body>
    @if (Auth::check())
        @include('layout.authnavbar')
    @else
        @include('layout.navbar')
    @endif
    @yield('content')
    @yield('map_content')
    @yield('donasi')
</body>
</html>
