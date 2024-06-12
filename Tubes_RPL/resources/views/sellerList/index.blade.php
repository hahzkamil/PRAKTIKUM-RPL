@extends('layout.main')

@section('content')
<h1 class="font-weight-bold text-center mt-5">Daftar Penjual</h1>
<div class="container mt-5">
    <div class="row">
        @foreach ($sellers as $seller)
            <div class="col-md-4 mb-4">
                <div class="card shadow">
                    <img src="{{ $seller->image }}" class="card-img-top" alt="Foto Penjual">
                    <div class="card-body">
                        <h5 class="card-title">{{ $seller->name }}</h5>
                        <p class="card-text">{{ $seller->address }}</p>
                        <a href="{{ route('seller.details', $seller->id) }}" class="btn btn-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
