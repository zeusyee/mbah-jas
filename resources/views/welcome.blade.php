<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>KopiKita</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">KopiKita</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="#menu" class="nav-link">Menu</a></li>
            <li class="nav-item"><a href="#blog" class="nav-link">Blog</a></li>
        </ul>
    </div>
</nav>

<!-- Hero Section -->
<div class="jumbotron text-center">
    <h1>Selamat Datang di KopiKita</h1>
    <p>Rasakan aroma kopi terbaik dari nusantara</p>
</div>

<div class="text-center mb-5">
    <img src="{{ asset('images/banner-kopi.jpg') }}" alt="Banner Kopi" class="img-fluid">
</div>

<!-- Menu Section -->
<section id="menu" class="container mb-5">
    <h2 class="text-center mb-4">Menu Kopi Kami</h2>
    <div class="row">
        @php
            $menu = [
                ['nama' => 'Espresso', 'harga' => 'Rp 18.000', 'gambar' => 'espresso.jpg'],
                ['nama' => 'Latte', 'harga' => 'Rp 22.000', 'gambar' => 'latte.jpg'],
                ['nama' => 'Kopi Susu Gula Aren', 'harga' => 'Rp 20.000', 'gambar' => 'kopi-susu.jpg'],
            ];
        @endphp

        @foreach ($menu as $item)
        <div class="col-md-4 mb-4">
            <div class="card h-100 text-center">
                <img src="{{ asset('images/' . $item['gambar']) }}" class="card-img-top" alt="{{ $item['nama'] }}">
                <div class="card-body">
                    <h5>{{ $item['nama'] }}</h5>
                    <p>{{ $item['harga'] }}</p>
                    <a href="https://wa.me/6281234567890?text=Halo,%20saya%20ingin%20pesan%20{{ urlencode($item['nama']) }}" target="_blank" class="btn btn-success">Pesan Sekarang</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<!-- Blog Section -->
<section id="blog" class="container mb-5">
    <h2 class="text-center mb-4">Blog Kopi</h2>
    <div class="row align-items-center">
        <div class="col-md-6">
            <p><strong>Sejarah Kopi di Nusantara</strong><br>
            Dari Aceh hingga Papua, kopi menjadi bagian dari budaya. Temukan berbagai fakta menarik dan perjalanan cita rasa dari biji ke cangkir.
            Kopi tidak hanya dinikmati sebagai minuman, tapi juga menjadi identitas budaya dan ekonomi lokal di berbagai daerah di Indonesia.</p>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('images/blog-kopi.jpg') }}" class="img-fluid rounded" alt="Blog Kopi">
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-4">
    &copy; 2025 KopiKita. All rights reserved.
</footer>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
