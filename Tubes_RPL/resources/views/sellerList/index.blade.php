@extends('layout.main')

@section('head')
<style>
    .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        transform: scale(1.05);
    }
    .btn-primary:hover {
        background-color: #0056b3; 
    }
</style>
@endsection

@section('content')
<h1 class="font-weight-bold text-center mt-5">Daftar Penjual</h1>
<div class="container mt-5">
    <div class="row">
    @if(isset($sellers))
        @foreach ($sellers as $seller)
            <div class="col-md-4 mb-4">
                <div class="card shadow">
                    <img src="{{ asset('img/penjual3.png') }}" class="card-img-top" alt="Foto Penjual">
                    <div class="card-body">
                        <h5 class="card-title">{{ $seller->nama_consumer }}</h5>
                        <p class="card-text">{{ $seller->alamat_consumer }}</p>
                        <a href="{{ route('sellerList.detailmitra', ['id' => $seller->id]) }}" class="btn btn-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>Tidak ada data seller</p>
    @endif
@endsection