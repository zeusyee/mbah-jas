@extends('layouts.app')

@section('title', 'Menu - Warung Nusantara')

@section('content')

<!-- Header Section -->
<section class="py-20 bg-gradient-to-r from-green-900 to-black">
    <div class="container mx-auto px-6 text-center">
        <h1 class="text-5xl font-bold mb-6">Menu Lengkap</h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto">
            Jelajahi koleksi lengkap menu tradisional Indonesia kami dengan cita rasa autentik dan berkualitas
        </p>
    </div>
</section>

<!-- Filter Section -->
<section class="py-8 bg-gray-900 border-b border-gray-800">
    <div class="container mx-auto px-6">
        <div class="flex flex-wrap justify-center gap-4">
            <button onclick="filterMenu('all')" class="filter-btn bg-green-600 text-white px-6 py-2 rounded-lg transition duration-300">
                <i class="fas fa-utensils mr-2"></i>Semua Menu
            </button>
            <button onclick="filterMenu('Makanan Utama')" class="filter-btn bg-gray-700 hover:bg-green-600 text-white px-6 py-2 rounded-lg transition duration-300">
                <i class="fas fa-drumstick-bite mr-2"></i>Makanan Utama
            </button>
            <button onclick="filterMenu('Minuman')" class="filter-btn bg-gray-700 hover:bg-green-600 text-white px-6 py-2 rounded-lg transition duration-300">
                <i class="fas fa-coffee mr-2"></i>Minuman
            </button>
            <button onclick="filterMenu('Dessert')" class="filter-btn bg-gray-700 hover:bg-green-600 text-white px-6 py-2 rounded-lg transition duration-300">
                <i class="fas fa-ice-cream mr-2"></i>Dessert
            </button>
        </div>
    </div>
</section>

<!-- Menu Grid Section -->
<section class="py-20 bg-gradient-to-b from-gray-900 to-black">
    <div class="container mx-auto px-6">
        <div id="menu-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
            // Default menu data jika $menus tidak ada
            $menuData = $menus ?? [
                ['id' => 1, 'name' => 'Nasi Gudeg Yogya', 'description' => 'Gudeg tradisional dengan ayam kampung, telur, dan sambal krecek. Disajikan dengan nasi hangat dan kerupuk.', 'price' => 25000, 'category' => 'Makanan Utama'],
                ['id' => 2, 'name' => 'Sate Klathak', 'description' => 'Sate kambing khas Yogyakarta dengan bumbu spesial dan lalapan segar. Dibakar dengan arang kayu.', 'price' => 35000, 'category' => 'Makanan Utama'],
                ['id' => 3, 'name' => 'Ayam Penyet', 'description' => 'Ayam goreng yang dipenyet dengan sambal terasi pedas, lalapan, dan nasi putih.', 'price' => 28000, 'category' => 'Makanan Utama'],
                ['id' => 4, 'name' => 'Rawon Daging', 'description' => 'Sup daging sapi hitam khas Jawa Timur dengan bumbu kluwek yang kaya rempah.', 'price' => 30000, 'category' => 'Makanan Utama'],
                ['id' => 5, 'name' => 'Es Dawet Ayu', 'description' => 'Minuman tradisional segar dengan dawet hijau, santan, dan gula merah asli.', 'price' => 15000, 'category' => 'Minuman'],
                ['id' => 6, 'name' => 'Es Teh Manis', 'description' => 'Teh manis dingin yang menyegarkan, cocok untuk segala cuaca.', 'price' => 8000, 'category' => 'Minuman'],
                ['id' => 7, 'name' => 'Jus Alpukat', 'description' => 'Jus alpukat segar dengan susu kental manis dan es batu.', 'price' => 18000, 'category' => 'Minuman'],
                ['id' => 8, 'name' => 'Pisang Goreng Keju', 'description' => 'Pisang goreng crispy dengan taburan keju parut dan susu kental manis.', 'price' => 12000, 'category' => 'Dessert']
            ];
            @endphp
            @foreach($menuData as $menu)
            <div class="menu-item menu-card bg-gray-800/50 rounded-xl overflow-hidden border border-gray-700 hover:border-green-500/50" data-category="{{ $menu['category'] }}">
                <!-- Image -->
                <div class="aspect-w-16 aspect-h-12 overflow-hidden">
                    <div class="w-full h-48 bg-gradient-to-br from-green-600 to-yellow-600 flex items-center justify-center">
                        <i class="fas fa-utensils text-4xl text-white opacity-50"></i>
                    </div>
                </div>
                
                <!-- Content -->
                <div class="p-6">
                    <div class="flex items-center justify-between mb-3">
                        <span class="inline-block bg-green-600/20 text-green-400 px-3 py-1 rounded-full text-sm">
                            {{ $menu['category'] }}
                        </span>
                        <div class="flex items-center text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span class="text-gray-400 text-sm ml-2">(4.8)</span>
                        </div>
                    </div>
                    
                    <h3 class="text-xl font-bold mb-3">{{ $menu['name'] }}</h3>
                    <p class="text-gray-400 mb-4 text-sm">{{ $menu['description'] }}</p>
                    
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-green-500">
                            Rp {{ number_format($menu['price'], 0, ',', '.') }}
                        </span>
                        <button onclick="orderNow('{{ $menu['name'] }}', {{ $menu['price'] }})" 
                                class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-lg transition duration-300 btn-glow inline-flex items-center">
                            <i class="fab fa-whatsapp mr-2"></i>
                            Pesan Sekarang
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <!-- No results message -->
        <div id="no-results" class="hidden text-center py-12">
            <i class="fas fa-search text-4xl text-gray-600 mb-4"></i>
            <h3 class="text-xl font-semibold text-gray-400 mb-2">Menu tidak ditemukan</h3>
            <p class="text-gray-500">Coba pilih kategori yang berbeda</p>
        </div>
    </div>
</section>

<!-- Special Offers Section -->
<section class="py-20 bg-black">
    <div class="container mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold mb-6">Penawaran Spesial</h2>
            <p class="text-xl text-gray-400">Dapatkan penawaran menarik dari kami</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-gradient-to-r from-green-700 to-green-600 rounded-xl p-8 text-white">
                <div class="flex items-center mb-4">
                    <i class="fas fa-percentage text-3xl mr-4"></i>
                    <div>
                        <h3 class="text-2xl font-bold">Diskon 20%</h3>
                        <p class="text-green-100">Untuk pembelian di atas Rp 100.000</p>
                    </div>
                </div>
                <p class="mb-6">Nikmati diskon spesial untuk setiap pembelian menu dengan minimal transaksi Rp 100.000. Berlaku untuk makan di tempat dan take away.</p>
                <a href="https://wa.me/6281234567890?text=Halo, saya ingin bertanya tentang promo diskon 20%" 
                   class="bg-white text-green-700 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition duration-300 inline-flex items-center">
                    <i class="fab fa-whatsapp mr-2"></i>
                    Klaim Sekarang
                </a>
            </div>
            
            <div class="bg-gradient-to-r from-yellow-700 to-yellow-600 rounded-xl p-8 text-white">
                <div class="flex items-center mb-4">
                    <i class="fas fa-users text-3xl mr-4"></i>
                    <div>
                        <h3 class="text-2xl font-bold">Paket Keluarga</h3>
                        <p class="text-yellow-100">Hemat lebih banyak untuk 4 orang</p>
                    </div>
                </div>
                <p class="mb-6">Paket spesial untuk keluarga yang terdiri dari 4 porsi makanan utama, minuman, dan dessert dengan harga yang lebih hemat.</p>
                <a href="{{ route('reservation.index') }}" 
                   class="bg-white text-yellow-700 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition duration-300 inline-flex items-center">
                    <i class="fas fa-calendar-alt mr-2"></i>
                    Reservasi Sekarang
                </a>
            </div>
        </div>
    </div>
</section>

<script>
    function filterMenu(category) {
        const menuItems = document.querySelectorAll('.menu-item');
        const filterBtns = document.querySelectorAll('.filter-btn');
        const noResults = document.getElementById('no-results');
        let hasVisibleItems = false;
        
        // Update button styles
        filterBtns.forEach(btn => {
            btn.classList.remove('bg-green-600');
            btn.classList.add('bg-gray-700');
        });
        event.target.classList.remove('bg-gray-700');
        event.target.classList.add('bg-green-600');
        
        // Filter menu items
        menuItems.forEach(item => {
            const itemCategory = item.getAttribute('data-category');
            if (category === 'all' || itemCategory === category) {
                item.style.display = 'block';
                hasVisibleItems = true;
            } else {
                item.style.display = 'none';
            }
        });
        
        // Show/hide no results message
        if (hasVisibleItems) {
            noResults.classList.add('hidden');
        } else {
            noResults.classList.remove('hidden');
        }
    }
    
    function orderNow(menuName, price) {
        const message = `Halo, saya ingin memesan:\n\n` +
                       `Menu: ${menuName}\n` +
                       `Harga: Rp ${price.toLocaleString('id-ID')}\n\n` +
                       `Mohon informasi ketersediaan dan cara pemesanannya. Terima kasih!`;
        
        const whatsappUrl = `https://wa.me/6281234567890?text=${encodeURIComponent(message)}`;
        window.open(whatsappUrl, '_blank');
    }
</script>

@endsection