@extends('layout.main')

@section('content')
<div class="container mt-5">
    <div class="card shadow">
        <img src="{{ asset('img/event.png') }}" class="card-img-top" alt="Gambar Kegiatan">
        <div class="card-body">
            <h5 class="card-title">{{ $event->nama_kegiatan }}</h5>
            <p class="card-text">{{ $event->deskripsi_kegiatan }}</p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Tanggal:</strong> {{ $event->tanggal_kegiatan }}</li>
                <li class="list-group-item"><strong>Lokasi:</strong> {{ $event->lokasi }}</li>
            </ul>
            <a href="{{ url('/events') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>
@endsection

