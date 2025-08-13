@extends('layouts.app')

@section('title', 'Warung Nusantara - Cita Rasa Tradisional Indonesia')

@section('content')

<!-- Hero Section -->
<section class="relative h-screen flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-r from-black via-gray-900 to-black opacity-80"></div>
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');"></div>
    
    <div class="relative z-10 text-center max-w-4xl mx-auto px-6">
        <h1 class="text-5xl md:text-7xl font-bold mb-6 bg-gradient-to-r from-green-400 to-yellow-400 bg-clip-text text-transparent">
            Warung Nusantara
        </h1>
        <p class="text-xl md:text-2xl mb-8 text-gray-300">
            Rasakan Kekayaan Cita Rasa Tradisional Indonesia
        </p>
        <p class="text-lg mb-12 text-gray-400 max-w-2xl mx-auto">
            Nikmati pengalaman kuliner autentik dengan menu-menu tradisional yang telah diwariskan turun temurun, dipadukan dengan pelayanan modern yang ramah dan nyaman.
        </p>
        
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('menu.index') }}" class="bg-green-600 hover:bg-green-700 text-white px-8 py-4 rounded-lg text-lg font-semibold transition duration-300 btn-glow inline-flex items-center justify-center">
                <i class="fas fa-utensils mr-2"></i>
                Lihat Menu
            </a>
            <a href="{{ route('reservation.index') }}" class="border-2 border-green-600 text-green-600 hover:bg-green-600 hover:text-white px-8 py-4 rounded-lg text-lg font-semibold transition duration-300 inline-flex items-center justify-center">
                <i class="fas fa-calendar-alt mr-2"></i>
                Reservasi Sekarang
            </a>
        </div>
    </div>
</section>

<!-- Featured Menu Section -->
<section id="featured-menu" class="py-20 bg-gradient-to-b from-gray-900 to-black">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">Menu Unggulan</h2>
            <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                Cicipi menu-menu spesial pilihan kami yang telah menjadi favorit pelanggan
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            @php
            // Default featured menu jika $featuredMenus tidak ada
            $featuredData = $featuredMenus ?? [
                ['id' => 1, 'name' => 'Nasi Gudeg Yogya', 'description' => 'Gudeg tradisional dengan ayam kampung dan telur', 'price' => 25000, 'category' => 'Makanan Utama'],
                ['id' => 2, 'name' => 'Sate Klathak', 'description' => 'Sate kambing khas Yogyakarta dengan bumbu spesial', 'price' => 35000, 'category' => 'Makanan Utama'],
                ['id' => 3, 'name' => 'Es Dawet Ayu', 'description' => 'Minuman tradisional segar dengan santan dan gula merah', 'price' => 15000, 'category' => 'Minuman']
            ];
            @endphp
            @foreach($featuredData as $menu)
            <div class="menu-card bg-gray-800/50 rounded-xl p-6 border border-gray-700 hover:border-green-500/50">
                <div class="aspect-w-16 aspect-h-12 mb-6 overflow-hidden rounded-lg">
                    <div class="w-full h-48 bg-gradient-to-br from-green-600 to-yellow-600 rounded-lg flex items-center justify-center">
                        <i class="fas fa-utensils text-4xl text-white opacity-50"></i>
                    </div>
                </div>
                
                <div class="text-center">
                    <span class="inline-block bg-green-600/20 text-green-400 px-3 py-1 rounded-full text-sm mb-3">
                        {{ $menu['category'] }}
                    </span>
                    <h3 class="text-xl font-bold mb-3">{{ $menu['name'] }}</h3>
                    <p class="text-gray-400 mb-4">{{ $menu['description'] }}</p>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-green-500">
                            Rp {{ number_format($menu['price'], 0, ',', '.') }}
                        </span>
                        <a href="https://wa.me/6281234567890?text=Halo, saya ingin memesan {{ $menu['name'] }}" 
                           class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg transition duration-300 inline-flex items-center">
                            <i class="fab fa-whatsapp mr-2"></i>
                            Pesan
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="text-center">
            <a href="{{ route('menu.index') }}" class="bg-gradient-to-r from-green-600 to-green-700 hover:from-green-700 hover:to-green-800 text-white px-8 py-4 rounded-lg text-lg font-semibold transition duration-300 btn-glow inline-flex items-center">
                <i class="fas fa-eye mr-2"></i>
                Lihat Semua Menu
            </a>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="py-20 bg-black">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-4xl font-bold mb-6">Tentang Warung Nusantara</h2>
                <p class="text-gray-400 mb-6 text-lg leading-relaxed">
                    Warung Nusantara hadir untuk melestarikan kekayaan kuliner Indonesia. Kami menghadirkan cita rasa autentik dari berbagai daerah di Nusantara dengan bahan-bahan berkualitas dan resep turun temurun.
                </p>
                <p class="text-gray-400 mb-8 text-lg leading-relaxed">
                    Setiap hidangan disiapkan dengan penuh cinta dan dedikasi untuk memberikan pengalaman kuliner terbaik bagi setiap tamu yang berkunjung.
                </p>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div class="bg-gray-800/50 p-4 rounded-lg border border-gray-700">
                        <div class="flex items-center mb-2">
                            <i class="fas fa-star text-yellow-500 mr-2"></i>
                            <h3 class="font-semibold">Resep Tradisional</h3>
                        </div>
                        <p class="text-gray-400 text-sm">Menggunakan resep asli yang telah diwariskan turun temurun</p>
                    </div>
                    
                    <div class="bg-gray-800/50 p-4 rounded-lg border border-gray-700">
                        <div class="flex items-center mb-2">
                            <i class="fas fa-leaf text-green-500 mr-2"></i>
                            <h3 class="font-semibold">Bahan Segar</h3>
                        </div>
                        <p class="text-gray-400 text-sm">Menggunakan bahan-bahan segar pilihan setiap hari</p>
                    </div>
                </div>
            </div>
            
            <div class="relative">
                <div class="aspect-w-16 aspect-h-12 rounded-xl overflow-hidden">
                    <div class="w-full h-80 bg-gradient-to-br from-green-700 to-yellow-700 rounded-xl flex items-center justify-center">
                        <i class="fas fa-utensils text-6xl text-white opacity-30"></i>
                    </div>
                </div>
                
                <div class="absolute -bottom-6 -left-6 bg-green-600 text-white p-4 rounded-lg shadow-lg">
                    <div class="text-2xl font-bold">50+</div>
                    <div class="text-sm">Menu Tradisional</div>
                </div>
                
                <div class="absolute -top-6 -right-6 bg-yellow-600 text-white p-4 rounded-lg shadow-lg">
                    <div class="text-2xl font-bold">5★</div>
                    <div class="text-sm">Rating Pelanggan</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-20 bg-gradient-to-b from-gray-900 to-black">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold mb-6">Mengapa Memilih Kami?</h2>
            <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                Pengalaman kuliner terbaik dengan pelayanan yang memuaskan
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center p-8 bg-gray-800/30 rounded-xl border border-gray-700 hover:border-green-500/50 transition duration-300">
                <div class="bg-green-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-clock text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-4">Pelayanan Cepat</h3>
                <p class="text-gray-400">Pesanan Anda akan disiapkan dengan cepat tanpa mengurangi kualitas rasa</p>
            </div>
            
            <div class="text-center p-8 bg-gray-800/30 rounded-xl border border-gray-700 hover:border-green-500/50 transition duration-300">
                <div class="bg-green-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-heart text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-4">Dibuat dengan Cinta</h3>
                <p class="text-gray-400">Setiap hidangan disiapkan dengan penuh perhatian dan dedikasi tinggi</p>
            </div>
            
            <div class="text-center p-8 bg-gray-800/30 rounded-xl border border-gray-700 hover:border-green-500/50 transition duration-300">
                <div class="bg-green-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-map-marker-alt text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-4">Lokasi Strategis</h3>
                <p class="text-gray-400">Terletak di pusat kota dengan akses mudah dan parkir yang luas</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-green-900 to-green-700">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-4xl font-bold mb-6">Siap Menikmati Cita Rasa Nusantara?</h2>
        <p class="text-xl mb-8 text-green-100 max-w-2xl mx-auto">
            Kunjungi warung kami atau lakukan reservasi sekarang untuk mendapatkan pengalaman kuliner yang tak terlupakan
        </p>
        
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('reservation.index') }}" class="bg-white text-green-700 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-gray-100 transition duration-300 inline-flex items-center justify-center">
                <i class="fas fa-calendar-alt mr-2"></i>
                Reservasi Meja
            </a>
            <a href="https://wa.me/6281234567890?text=Halo, saya ingin bertanya tentang menu" class="border-2 border-white text-white hover:bg-white hover:text-green-700 px-8 py-4 rounded-lg text-lg font-semibold transition duration-300 inline-flex items-center justify-center">
                <i class="fab fa-whatsapp mr-2"></i>
                Hubungi Kami
            </a>
        </div>
    </div>
</section>

@endsection