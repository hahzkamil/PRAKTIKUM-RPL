<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Sukses</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
@extends('layout.main')
@section('content')
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-success" role="alert">
                Checkout berhasil! Terima kasih telah berbelanja dengan kami.
            </div>
            <h2>Detail Pesanan</h2>
            <ul class="list-group mb-3">
                <!-- Item 1 -->
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Ikan Tuna 1Kg
                    <span class="badge badge-primary badge-pill">Rp100.000</span>
                </li>
                <!-- Item 2 -->
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Ikan Gurame 2Kg
                    <span class="badge badge-primary badge-pill">Rp200.000</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center text-muted">
                    Ongkos Kirim
                    <span class="badge badge-primary badge-pill">Rp20.000</span>
                </li>
                <!-- Total -->
                <li class="list-group-item d-flex justify-content-between">
                    <span>Total (IDR)</span>
                    <strong>Rp320.000</strong>
                </li>
            </ul>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Informasi Pengiriman</h5>
                    <p class="card-text">Pengiriman akan dilakukan melalui kurir yang dipilih dan metode pengiriman yang telah ditentukan.</p>
                    <a href="catalogproduk" class="btn btn-primary">Kembali ke katalog</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
@endsection
