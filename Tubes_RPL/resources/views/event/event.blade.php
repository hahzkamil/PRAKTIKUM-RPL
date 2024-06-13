@extends('layout.main')

@section('content')
<div class="container mt-5">
    <h1 class="text-center">Jadwal Kegiatan</h1>
    <div class="row">
        @foreach ($events as $event)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    {{-- <img src="{{ $event->image_url }}" class="card-img-top" alt="Gambar Kegiatan"> --}}
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $event->nama_kegiatan }}</h5>
                        <p class="card-text">{{ $event->deskripsi_kegiatan }}</p>
                        <ul class="list-group list-group-flush mt-auto">
                            <li class="list-group-item"><strong>Tanggal:</strong> {{ $event->tanggal_kegiatan }}</li>
                            <li class="list-group-item"><strong>Lokasi:</strong> {{ $event->lokasi }}</li>
                        </ul>
                        <div class="card-footer mt-auto">
                            <a href="{{ route('event.details', $event->id) }}" class="btn btn-primary w-100">Detail Kegiatan</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection