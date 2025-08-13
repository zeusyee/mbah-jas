<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Warung Nusantara - Cita Rasa Tradisional')</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        
        .gradient-overlay {
            background: linear-gradient(135deg, rgba(0,0,0,0.8) 0%, rgba(30,30,30,0.9) 100%);
        }
        
        .menu-card {
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }
        
        .menu-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.3);
        }
        
        .btn-glow {
            box-shadow: 0 0 20px rgba(34, 197, 94, 0.3);
            transition: all 0.3s ease;
        }
        
        .btn-glow:hover {
            box-shadow: 0 0 30px rgba(34, 197, 94, 0.5);
        }
    </style>
</head>
<body class="bg-gray-900 text-white">
    
    <!-- Navigation -->
    <nav class="bg-black/90 backdrop-blur-md fixed w-full z-50 border-b border-gray-800">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-2">
                    <i class="fas fa-utensils text-green-500 text-2xl"></i>
                    <h1 class="text-2xl font-bold text-white">Warung Nusantara</h1>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="{{ route('home') }}" class="text-gray-300 hover:text-green-500 transition duration-300 {{ request()->routeIs('home') ? 'text-green-500' : '' }}">
                        <i class="fas fa-home mr-2"></i>Beranda
                    </a>
                    <a href="{{ route('menu.index') }}" class="text-gray-300 hover:text-green-500 transition duration-300 {{ request()->routeIs('menu.index') ? 'text-green-500' : '' }}">
                        <i class="fas fa-utensils mr-2"></i>Menu
                    </a>
                    <a href="{{ route('reservation.index') }}" class="text-gray-300 hover:text-green-500 transition duration-300 {{ request()->routeIs('reservation.index') ? 'text-green-500' : '' }}">
                        <i class="fas fa-calendar-alt mr-2"></i>Reservasi
                    </a>
                </div>
                
                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="md:hidden text-white">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
            
            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden mt-4 pb-4 border-t border-gray-700">
                <div class="flex flex-col space-y-4 mt-4">
                    <a href="{{ route('home') }}" class="text-gray-300 hover:text-green-500 transition duration-300">
                        <i class="fas fa-home mr-2"></i>Beranda
                    </a>
                    <a href="{{ route('menu.index') }}" class="text-gray-300 hover:text-green-500 transition duration-300">
                        <i class="fas fa-utensils mr-2"></i>Menu
                    </a>
                    <a href="{{ route('reservation.index') }}" class="text-gray-300 hover:text-green-500 transition duration-300">
                        <i class="fas fa-calendar-alt mr-2"></i>Reservasi
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-20">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-black border-t border-gray-800 py-12">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <div class="flex items-center space-x-2 mb-4">
                        <i class="fas fa-utensils text-green-500 text-2xl"></i>
                        <h3 class="text-xl font-bold">Warung Nusantara</h3>
                    </div>
                    <p class="text-gray-400">Menyajikan cita rasa tradisional Indonesia dengan sentuhan modern. Nikmati pengalaman kuliner yang tak terlupakan bersama keluarga.</p>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Kontak</h3>
                    <div class="space-y-2 text-gray-400">
                        <p><i class="fas fa-map-marker-alt mr-2"></i>Jl.Tegllayang Caturharjo Pandak Bantul</p>
                        <p><i class="fas fa-phone mr-2"></i>+62 812-3456-7890</p>
                        <p><i class="fas fa-envelope mr-2"></i>info@warungnusantara.com</p>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Jam Operasional</h3>
                    <div class="space-y-2 text-gray-400">
                        <p>Senin - Kamis: 10:00 - 22:00</p>
                        <p>Jumat - Minggu: 10:00 - 23:00</p>
                        <p>Tutup pada hari libur nasional</p>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2025 Warung Nusantara. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html>