@extends('layout.main')

@section('title')
    <title>Tentang Kami - Website Jual Beli Ikan</title>
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white text-center">
                        <h3 class="mb-0">Tentang Kami</h3>
                    </div>
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-6 text-center">
                                <img src="{{ URL('img/fishon.jpeg') }}" class="img-fluid rounded mb-3" alt="Tentang Kami">
                            </div>
                            <div class="col-md-6">
                                <h5 class="card-title">Selamat Datang di Website Jual Beli Ikan</h5>
                                <p class="card-text">
                                    Kami adalah platform online yang menghubungkan penjual dan pembeli ikan segar dari berbagai wilayah.
                                </p>
                                <p class="card-text">
                                    Dengan misi untuk memudahkan transaksi jual beli ikan, kami menyediakan layanan yang cepat, aman, dan terpercaya.
                                </p>
                                <a href="{{ url('/') }}" class="btn btn-primary mt-3">Kembali ke Beranda</a>
                                <a href="/faq" class="btn btn-primary mt-3">Lihat FAQ</a>
                            </div>
                        </div>
                        <hr>
                        <div class="row text-center mt-4">
                            <div class="col-md-4">
                                <img src="{{ URL('img/quality.jpg') }}" class="img-fluid rounded-circle mb-3" alt="Quality">
                                <h5>Kualitas Terbaik</h5>
                                <p class="card-text">Kami bekerja sama dengan mitra penjual terpercaya untuk memastikan setiap produk yang Anda terima adalah yang terbaik.</p>
                            </div>
                            <div class="col-md-4">
                                <img src="{{ URL('img/delivery2.jpg') }}" class="img-fluid rounded-circle mb-3" alt="Service">
                                <h5>Layanan Cepat</h5>
                                <p class="card-text">Kami menyediakan layanan yang cepat dan responsif untuk memenuhi kebutuhan Anda.</p>
                            </div>
                            <div class="col-md-4">
                                <img src="{{ URL('img/service.jpg') }}" class="img-fluid rounded-circle mb-3" alt="Support" style="width: 200px; height: 200px; margin-right: 10px;">
                                <h5>Dukungan Pelanggan</h5>
                                <p class="card-text">Kami siap membantu Anda dengan solusi cepat untuk setiap permasalahan yang mungkin Anda hadapi.</p>
                            </div>
                        </div>
                        
                        <hr>
                        <div id="complaints-section" class="mt-5">
                            <h4 class="text-center">Fitur Keluhan</h4>
                            <form action="{{ url('/complaint-success') }}" method="GET">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="complaint" class="form-label">Keluhan</label>
                                    <textarea class="form-control" id="complaint" name="complaint" rows="5" required></textarea>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Kirim Keluhan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
