<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    Informasi Pembayaran
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="cardNumber">Nomor Kartu</label>
                            <input type="text" class="form-control" id="cardNumber" placeholder="Nomor Kartu">
                        </div>
                        <div class="form-group">
                            <label for="cardName">Nama Pemilik Kartu</label>
                            <input type="text" class="form-control" id="cardName" placeholder="Nama Pemilik Kartu">
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="expiryDate">Tanggal Kadaluarsa</label>
                                <input type="text" class="form-control" id="expiryDate" placeholder="MM/YY">
                            </div>
                            <div class="col">
                                <label for="cvv">CVV</label>
                                <input type="text" class="form-control" id="cvv" placeholder="CVV">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Bayar Sekarang</button>
                    </form>
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
