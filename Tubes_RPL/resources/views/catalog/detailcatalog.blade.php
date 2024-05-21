<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css"> <!-- Tautkan berkas CSS eksternal -->
    <title>Detail Katalog Produk</title>
    <style>
        .product-card {
            border: 1px solid #ddd;
            padding: 20px;
            text-align: center;
            background-color: #f9f9f9;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .product-card img {
            max-width: 100%;
            height: auto;
        }

        .product-title {
            font-size: 1.2rem;
            margin: 10px 0;
        }

        .product-description {
            font-size: 0.9rem;
            color: #777;
        }

        .product-price {
            font-size: 1.1rem;
            font-weight: bold;
            margin: 10px 0;
        }

        .add-to-cart {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .add-to-cart:hover {
            background-color: #0056b3;
        }

    </style>
</head>
<body>
    <div class="product-card">
        <img src="product-image.jpg" alt="Product Image">
        <h3 class="product-title">Nama Produk</h3>
        <p class="product-description">Deskripsi singkat tentang produk ini.</p>
        <p class="product-price">$99.99</p>
        <button class="add-to-cart">Tambah ke Keranjang</button>
    </div>
</body>
</html>
