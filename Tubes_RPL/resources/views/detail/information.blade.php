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
                        <p class="card-text">Alamat: sukabirus</p>
                        <p class="card-text">Kontak: 0822890312</p>
                        <p class="card-text">Deskripsi: jualan ikan salmon es</p>
                        <a href="sellerlist" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
