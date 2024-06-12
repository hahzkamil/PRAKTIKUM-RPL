@extends ('layout.main')

@section('content')

<!DOCTYPE html>
<html lang="en">
<div class="container mt-5">
        <div>
            <h4 class="fw-semibold">Edit Akun</h4>
            <h5 class="fw-normal">Kelola informasi akun anda untuk mengontrol, melindungi dan mengamankan akun</h5>
        </div>

        <center class="mx-5 px-5 mt-5 pt-3">
            <img src="{{ asset('img/profil.jpeg') }}" alt="" style="width: 200px"> <br>
            <button class="btn btn-outline-dark mt-2 mb-4">Pilih Gambar</button>
            <form style="width: 50%">
                <div class="mb-3 text-start">
                    <label class="form-label fw-semibold">Nama Lengkap</label>
                    <input type="text" class="form-control border border-dark" value="">
                </div>
                <div class="mb-3 text-start">
                    <label class="form-label fw-semibold">Email</label>
                    <input type="email" class="form-control border border-dark" value="">
                </div>
                <div class="mb-3 text-start">
                    <label class="form-label fw-semibold">Password</label>
                    <input type="password" class="form-control border border-dark" value="">
                </div>
                <div class="mb-3 text-start">
                    <label class="form-label fw-semibold">Alamat</label>
                    <textarea class="form-control border border-dark" name="" id="" cols="30" rows="4">Jl. Telekomunikasi. 1, Terusan Buahbatu - Bojongsoang, Telkom University, Sukapura, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40257</textarea>
                </div>
                <div class="mb-3 text-start">
                    <label class="form-label fw-semibold">No Telepon</label>
                    <input type="number" class="form-control border border-dark" value="">
                </div>
                <button href='profile' class="float-end btn text-white mt-5"
                    style="background-color: #4d7fea">Simpan</button>
            </form>
        </center>
    </div>

</html>

@endsection