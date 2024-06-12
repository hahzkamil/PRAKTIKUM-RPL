@extends('layout.main')

@section('title')
    <title>Keluhan Berhasil Terkirim</title>
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-success text-white text-center">
                        <h3 class="mb-0">Keluhan Berhasil Terkirim</h3>
                    </div>
                    <div class="card-body text-center">
                        <img src="{{ URL('img/makasih.jpg') }}" class="img-fluid mb-3" alt="Success">
                        <h5 class="card-title">Terima Kasih</h5>
                        <p class="card-text">
                            Keluhan Anda telah berhasil dikirim. Kami akan menindaklanjuti keluhan Anda secepat mungkin. Terima kasih telah menghubungi kami.
                        </p>
                        <a href="{{ url('/') }}" class="btn btn-primary mt-3">Kembali ke Beranda</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
