@extends('layout.main')

@section('content')
<h1 class="font-weight-bold text-center mt-5">Daftar Penjual</h1>
<div class="container mt-5">
    <div class="row">
<<<<<<< HEAD
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
=======
        <div class="col-md-4">
            <div class="card">
                    @foreach ($seller as $item)
                        <h5>{{$item['nama_consumer']}}</h5>
                        <p>{{$item['alamat_consumer']}}</p>
                        <a href="detailmitra" class="btn btn-primary">View Details</a>
                    @endforeach

            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Seller B</h5>
                    <p class="card-text">Baleendah, Dayeuhkolot, Jawa Barat</p>
                    <a href="detailmitra" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Seller C</h5>
                    <p class="card-text">Ciganitri, Dayeuhkolot, Jawa Barat</p>
                    <a href="detailmitra" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>
>>>>>>> 347180b0993066f580c86fb2d6293029d64c52a8
    </div>
</div>
@endsection
