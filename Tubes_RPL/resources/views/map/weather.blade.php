@extends('layout.main')

@section('content')
<div class="container mt-5">
    <h2>Weather Forecast</h2>

    {{-- Menampilkan pesan error jika ada --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('getWeather') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="city">Negara</label>
            <input type="text" class="form-control" id="city" name="city" required>
        </div>
        <div class="form-group">
            <label for="country">Nama Kota</label>
            <input type="text" class="form-control" id="country" name="country" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Lihat Perkiraan Cuaca</button>
    </form>

    @isset($weather)
        <div class="mt-5">
            <h3>Weather in {{ $weather['name'] }}</h3>
            <p><strong>Temperature:</strong> {{ $weather['main']['temp'] }}°C</p>
            <p><strong>Weather:</strong> {{ $weather['weather'][0]['description'] }}</p>
            <p><strong>Humidity:</strong> {{ $weather['main']['humidity'] }}%</p>
            <p><strong>Wind Speed:</strong> {{ $weather['wind']['speed'] }} m/s</p>
        </div>
    @endisset
</div>
@endsection
