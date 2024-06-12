@extends('layout.main')

@section('title')

@section('content')
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
            grid-template-columns: repeat(4, 1fr); /* 4 produk per baris */
            gap: 20px;
            padding: 20px;
        }

        .product-item {
            border: 1px solid #ccc;
            padding: 20px;
            text-align: center;
            background-color: #f9f9f9;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }

        .product-item img {
            max-width: 100%;
            height: auto;
        }

        .product-name {
            font-weight: bold;
            font-size: 1.2rem; /* Memperbesar ukuran teks nama produk */
            margin: 15px 0; /* Menambah margin untuk memberi lebih banyak ruang */
        }

        .product-price {
            color: #007bff;
            font-size: 1.1rem; /* Memperbesar ukuran teks harga */
            margin: 15px 0; /* Menambah margin untuk memberi lebih banyak ruang */
        }

        .add-to-cart {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px; /* Menambah padding untuk memperbesar tombol */
            font-size: 1rem; /* Memperbesar ukuran teks tombol */
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .add-to-cart:hover {
            background-color: #0056b3;
        }

        .product-item:hover {
            transform: scale(1.05); /* Menambah efek zoom saat hover */
        }
    </style>
</head>
<body>
    <main class="product-grid">
        <!-- Baris 1 -->
        <!-- Produk 1 -->
        <div class="product-item">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/06/Osphronemus_goramy_2008_G1.jpg/1200px-Osphronemus_goramy_2008_G1.jpg" alt="Ikan Tuna 2 KG"width="150" class="ml-lg-5 order-1 order-lg-2">
            <p class="product-name">Ikan Tuna 1 KG</p>
            <p class="product-price">Rp95.000</p>
            <button href="cart" class="add-to-cart">Tambah ke Keranjang</button>
        </div>

        <!-- Produk 2 -->
        <div class="product-item">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/06/Osphronemus_goramy_2008_G1.jpg/1200px-Osphronemus_goramy_2008_G1.jpg" alt="Ikan Tuna 2 KG"width="150" class="ml-lg-5 order-1 order-lg-2">
            <p class="product-name">Ikan Tuna 2 KG</p>
            <p class="product-price">Rp180.000</p>
            <button href="cart" class="add-to-cart">Tambah ke Keranjang</button>
        </div>

        <!-- Produk 3 -->
        <div class="product-item">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/06/Osphronemus_goramy_2008_G1.jpg/1200px-Osphronemus_goramy_2008_G1.jpg" alt="Ikan Tuna 2 KG"width="150" class="ml-lg-5 order-1 order-lg-2">
            <p class="product-name">Ikan Tuna 3 KG</p>
            <p class="product-price">Rp270.000</p>
            <button href="cart" class="add-to-cart">Tambah ke Keranjang</button>
        </div>

        <!-- Produk 4 -->
        <div class="product-item">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/06/Osphronemus_goramy_2008_G1.jpg/1200px-Osphronemus_goramy_2008_G1.jpg" alt="Ikan Tuna 2 KG"width="150" class="ml-lg-5 order-1 order-lg-2">
            <p class="product-name">Ikan Tuna 4 KG</p>
            <p class="product-price">Rp360.000</p>
            <button href="cart" class="add-to-cart">Tambah ke Keranjang</button>
        </div>

        <!-- Baris 2 -->
        <!-- Produk 1 -->
        <div class="product-item">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/06/Osphronemus_goramy_2008_G1.jpg/1200px-Osphronemus_goramy_2008_G1.jpg" alt="Ikan Tuna 2 KG"width="150" class="ml-lg-5 order-1 order-lg-2">
            <p class="product-name">Ikan Tuna 1 KG</p>
            <p class="product-price">Rp95.000</p>
            <button href="cart" class="add-to-cart">Tambah ke Keranjang</button>
        </div>

        <!-- Produk 2 -->
        <div class="product-item">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/06/Osphronemus_goramy_2008_G1.jpg/1200px-Osphronemus_goramy_2008_G1.jpg" alt="Ikan Tuna 2 KG"width="150" class="ml-lg-5 order-1 order-lg-2">
            <p class="product-name">Ikan Tuna 2 KG</p>
            <p class="product-price">Rp180.000</p>
            <button href="cart" class="add-to-cart">Tambah ke Keranjang</button>
        </div>

        <!-- Produk 3 -->
        <div class="product-item">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/06/Osphronemus_goramy_2008_G1.jpg/1200px-Osphronemus_goramy_2008_G1.jpg" alt="Ikan Tuna 2 KG"width="150" class="ml-lg-5 order-1 order-lg-2">
            <p class="product-name">Ikan Tuna 3 KG</p>
            <p class="product-price">Rp270.000</p>
            <button href="cart" class="add-to-cart">Tambah ke Keranjang</button>
        </div>

        <!-- Produk 4 -->
        <div class="product-item">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/06/Osphronemus_goramy_2008_G1.jpg/1200px-Osphronemus_goramy_2008_G1.jpg" alt="Ikan Tuna 2 KG"width="150" class="ml-lg-5 order-1 order-lg-2">
            <p class="product-name">Ikan Tuna 4 KG</p>
            <p class="product-price">Rp360.000</p>
            <button href="cart" class="add-to-cart">Tambah ke Keranjang</button>
        </div>

        <!-- Baris 3 -->
        <!-- Produk 1 -->
        <div class="product-item">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/06/Osphronemus_goramy_2008_G1.jpg/1200px-Osphronemus_goramy_2008_G1.jpg" alt="Ikan Tuna 2 KG"width="150" class="ml-lg-5 order-1 order-lg-2">
            <p class="product-name">Ikan Tuna 1 KG</p>
            <p class="product-price">Rp95.000</p>
            <button href="cart" class="add-to-cart">Tambah ke Keranjang</button>
        </div>

        <!-- Produk 2 -->
        <div class="product-item">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/06/Osphronemus_goramy_2008_G1.jpg/1200px-Osphronemus_goramy_2008_G1.jpg" alt="Ikan Tuna 2 KG"width="150" class="ml-lg-5 order-1 order-lg-2">
            <p class="product-name">Ikan Tuna 2 KG</p>
            <p class="product-price">Rp180.000</p>
            <button href="cart" class="add-to-cart">Tambah ke Keranjang</button>
        </div>

        <!-- Produk 3 -->
        <div class="product-item">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/06/Osphronemus_goramy_2008_G1.jpg/1200px-Osphronemus_goramy_2008_G1.jpg" alt="Ikan Tuna 2 KG"width="150" class="ml-lg-5 order-1 order-lg-2">
            <p class="product-name">Ikan Tuna 3 KG</p>
            <p class="product-price">Rp270.000</p>
            <button href="cart" class="add-to-cart">Tambah ke Keranjang</button>
        </div>

        <!-- Produk 4 -->
        <div class="product-item">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/06/Osphronemus_goramy_2008_G1.jpg/1200px-Osphronemus_goramy_2008_G1.jpg" alt="Ikan Tuna 2 KG"width="150" class="ml-lg-5 order-1 order-lg-2">
            <p class="product-name">Ikan Tuna 4 KG</p>
            <p class="product-price">Rp360.000</p>
            <button href="cart" class="add-to-cart">Tambah ke Keranjang</button>
        </div>
@endsection
