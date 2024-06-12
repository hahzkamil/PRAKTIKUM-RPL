@extends('layout.main')

@section('title')
    <title>Informasi Detail Toko/Mitra</title>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card mt-5">
                    <div class="card-header">
                        Informasi Detail Toko/Mitra
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Toko A</h5>
                        <p class="card-text">Alamat: Sukabirus</p>
                        <p class="card-text">Kontak: 0822890312</p>
                        <p class="card-text">Deskripsi: Jualan ikan salmon es</p>
                        <a href="sellerlist" class="btn btn-primary">Kembali</a>
                        <a href="https://wa.me/6285814493411" class="btn btn-success">Hubungi via WhatsApp</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
