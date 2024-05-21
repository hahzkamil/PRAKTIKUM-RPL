<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Katalog Ikan Tuna</title>
    <style>
        /* styles.css */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #f5f5f5;
            padding: 10px;
        }

        nav ul {
            list-style: none;
            display: flex;
            justify-content: space-around;
        }

        nav a {
            text-decoration: none;
            color: #333;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
            padding: 20px;
        }

        .product-item {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }

        .product-item img {
            max-width: 100%;
        }

        .product-name {
            font-weight: bold;
        }

        .product-price {
            color: #007bff;
        }

        .add-to-cart {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }

    </style>
</head>
<body>
    <main class="product-grid">
        <!-- Produk 1 -->
        <div class="product-item">
            <img src="ikan-tuna-1.jpg" alt="Ikan Tuna 1 KG">
            <p class="product-name">Ikan Tuna 1 KG</p>
            <p class="product-price">Rp95.000</p>
            <button class="add-to-cart">Tambah ke Keranjang</button>
        </div>

        <!-- Ulangi item produk serupa untuk ikan tuna lainnya -->
        <!-- Produk 2, Produk 3, ... -->

    </main>
</body>
</html>
