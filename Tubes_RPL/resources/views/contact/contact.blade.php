@extends('layout.main')

@section('title')
    <title>Informasi Detail Toko/Mitra</title>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Informasi Toko/Mitra</h2>
                <!-- Seller Information -->
                <div class="seller-info">
                    <h4>Nama Toko/Mitra:</h4>
                    <p>{{ $infomartion->name }}</p>
                    <h4>Alamat:</h4>
                    <p>{{ $infomartion->address }}</p>
                    <h4>Kontak:</h4>
                    <p>{{ $infomartion->contact }}</p>
                    <!-- WhatsApp Icon and Link -->
                    <a href="https://wa.me/{{ $infomartion->whatsapp }}" target="_blank">
                        <img src="whatsapp_icon.png" alt="WhatsApp" width="32" height="32">
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
