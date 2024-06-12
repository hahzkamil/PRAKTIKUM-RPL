<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
@extends('layout.main')
@section('content')
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <ul class="list-group">
                <!-- Item 1 -->
                <li class="list-group-item d-flex align-items-center">
                    <img src="https://dkpp.bulelengkab.go.id/public/uploads/konten/mengenal-5-jenis-ikan-tuna-sirip-biru-30.jpg" alt="Ikan Tuna 2 KG" width="150" class="mr-3">
                    <div>
                        <h5 class="my-0">Ikan Tuna 1Kg</h5>
                        <small class="text-muted">Ikan Tuna khas Bekasi</small>
                    </div>
                    <span class="badge badge-primary badge-pill ml-auto">Rp100.000</span>
                </li>
                <!-- Item 2 -->
                <li class="list-group-item d-flex align-items-center">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/06/Osphronemus_goramy_2008_G1.jpg/1200px-Osphronemus_goramy_2008_G1.jpg" alt="Ikan Gurame 2 KG" width="150" class="mr-3">
                    <div>
                        <h5 class="my-0">Ikan Gurame 2Kg</h5>
                        <small class="text-muted">Deskripsi singkat</small>
                    </div>
                    <span class="badge badge-primary badge-pill ml-auto">Rp200.000</span>
                </li>
                <!-- More items... -->
            </ul>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Ringkasan Pesanan</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Subtotal</span>
                            <strong>Rp300.000</strong>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Ongkos kirim</span>
                            <strong>Rp20.000</strong>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total</span>
                            <strong>Rp320.000</strong>
                        </li>
                    </ul>
                    <a href="checkout" class="btn btn-primary btn-lg btn-block">Checkout</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Bagian bawah produk untuk pilihan pengiriman dan pembayaran -->
<div class="container mt-3">
    <div class="row">
        <div class="col-md-8">
            <!-- Pilihan Pengiriman -->
            <h6 class="mb-2">Pilihan Pengiriman:</h6>
            <select class="custom-select mb-3">
                <option selected>Pilih Metode Pengiriman</option>
                <option value="reguler">Reguler</option>
                <option value="ekspres">Ekspres</option>
                <option value="sameday">Same Day Delivery</option>
            </select>
            <!-- Pilihan Kurir -->
            <h6 class="mb-2">Pilih Kurir:</h6>
            <select class="custom-select mb-3">
                <option selected>Pilih Kurir</option>
                <option value="jne">JNE</option>
                <option value="tiki">TIKI</option>
                <option value="pos">POS Indonesia</option>
                <option value="sicepat">SiCepat</option>
                <option value="gojek">Gojek</option>
            </select>
        </div>
        <div class="col-md-4">
            <!-- Pilihan Pembayaran -->
            <h6 class="mb-2">Pilihan Pembayaran:</h6>
            <select class="custom-select mb-3">
                <option selected>Pilih Metode Pembayaran</option>
                <option value="transfer_bank">Transfer Bank</option>
                <option value="kartu_kredit">Kartu Kredit</option>
                <option value="virtual_account">Virtual Account</option>
                <option value="cod">Cash on Delivery (COD)</option>
            </select>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
@endsection