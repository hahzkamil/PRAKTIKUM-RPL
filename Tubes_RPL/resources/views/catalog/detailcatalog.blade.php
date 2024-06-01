@extends('layout.main')

@section('title')

@section('content')
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-top: 20px; /* Menambah jarak atas */
        }

        .product-item {
            display: flex;
            align-items: center;
        }

        .product-img {
            flex: 0 0 40%;
            margin-right: 20px;
        }

        .product-img img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .product-details {
            flex: 1;
        }

        .product-name {
            font-weight: bold;
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .product-price {
            color: #007bff;
            font-size: 1.3rem;
            margin-bottom: 20px;
        }

        .product-description {
            margin-bottom: 20px;
        }

        .back-to-catalog {
            display: block;
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
            margin-top: 20px;
        }

        .back-to-catalog:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="product-item">
            <div class="product-img">
                <img src="ikan-tuna-1.jpg" alt="Ikan Tuna 1 KG">
            </div>
            <div class="product-details">
                <p class="product-name">Ikan Tuna 1 KG</p>
                <p class="product-price">Rp95.000</p>
                <p class="product-description">Deskripsi produk: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                <a href="#" class="back-to-catalog">Back to Catalog</a>
            </div>
        </div>
    </div>
@endsection
