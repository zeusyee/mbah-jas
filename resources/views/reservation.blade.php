@extends('layouts.app')

@section('title', 'Reservasi - Warung Nusantara')

@section('content')

<!-- Header Section -->
<section class="py-20 bg-gradient-to-r from-green-900 to-black">
    <div class="container mx-auto px-6 text-center">
        <h1 class="text-5xl font-bold mb-6">Reservasi Meja</h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto">
            Reservasi meja Anda sekarang dan nikmati pengalaman kuliner terbaik bersama keluarga dan teman-teman
        </p>
    </div>
</section>

<!-- Reservation Form Section -->
<section class="py-20 bg-gradient-to-b from-gray-900 to-black">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <form action="{{ route('reservation.store') }}" method="POST" class="bg-gray-800/50 rounded-2xl p-8 border border-gray-700">
                @csrf
                
                <!-- Personal Information -->
                <div class="mb-8">
                    <h2 class="text-2xl font-bold mb-6 text-center">Informasi Reservasi</h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-300 text-sm font-medium mb-2">
                                <i class="fas fa-user mr-2"></i>Nama Lengkap
                            </label>
                            <input type="text" name="name" required 
                                   class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:outline-none focus:border-green-500 focus:ring-1 focus:ring-green-500 text-white"
                                   placeholder="Masukkan nama lengkap">
                        </div>
                        
                        <div>
                            <label class="block text-gray-300 text-sm font-medium mb-2">
                                <i class="fas fa-phone mr-2"></i>Nomor Telepon
                            </label>
                            <input type="tel" name="phone" required 
                                   class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:outline-none focus:border-green-500 focus:ring-1 focus:ring-green-500 text-white"
                                   placeholder="08xxxxxxxxxx">
                        </div>
                    </div>
                </div>
                
                <!-- Reservation Details -->
                <div class="mb-8">
                    <h3 class="text-xl font-semibold mb-4">Detail Reservasi</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                        <div>
                            <label class="block text-gray-300 text-sm font-medium mb-2">
                                <i class="fas fa-calendar mr-2"></i>Tanggal
                            </label>
                            <input type="date" name="date" required 
                                   class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:outline-none focus:border-green-500 focus:ring-1 focus:ring-green-500 text-white"
                                   min="{{ date('Y-m-d') }}">
                        </div>
                        
                        <div>
                            <label class="block text-gray-300 text-sm font-medium mb-2">
                                <i class="fas fa-clock mr-2"></i>Waktu
                            </label>
                            <select name="time" required 
                                    class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:outline-none focus:border-green-500 focus:ring-1 focus:ring-green-500 text-white">
                                <option value="">Pilih Waktu</option>
                                <option value="10:00">10:00 WIB</option>
                                <option value="11:00">11:00 WIB</option>
                                <option value="12:00">12:00 WIB</option>
                                <option value="13:00">13:00 WIB</option>
                                <option value="14:00">14:00 WIB</option>
                                <option value="15:00">15:00 WIB</option>
                                <option value="16:00">16:00 WIB</option>
                                <option value="17:00">17:00 WIB</option>
                                <option value="18:00">18:00 WIB</option>
                                <option value="19:00">19:00 WIB</option>
                                <option value="20:00">20:00 WIB</option>
                                <option value="21:00">21:00 WIB</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-gray-300 text-sm font-medium mb-2">
                                <i class="fas fa-users mr-2"></i>Jumlah Tamu
                            </label>
                            <select name="guests" required 
                                    class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:outline-none focus:border-green-500 focus:ring-1 focus:ring-green-500 text-white">
                                <option value="">Pilih Jumlah</option>
                                @for($i = 1; $i <= 10; $i++)
                                    <option value="{{ $i }}">{{ $i }} {{ $i == 1 ? 'orang' : 'orang' }}</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                </div>
                
                <!-- Menu Selection -->
                <div class="mb-8">
                    <h3 class="text-xl font-semibold mb-4">Pre-Order Menu (Opsional)</h3>
                    <p class="text-gray-400 mb-6">Pilih menu yang ingin Anda pesan untuk menghemat waktu</p>
                    
                    <div id="menu-selection" class="space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            @php
                            // Default menu data jika $menus tidak ada
                            $menuData = $menus ?? [
                                ['id' => 1, 'name' => 'Nasi Gudeg Yogya', 'price' => 25000, 'category' => 'Makanan Utama'],
                                ['id' => 2, 'name' => 'Sate Klathak', 'price' => 35000, 'category' => 'Makanan Utama'],
                                ['id' => 3, 'name' => 'Ayam Penyet', 'price' => 28000, 'category' => 'Makanan Utama'],
                                ['id' => 4, 'name' => 'Rawon Daging', 'price' => 30000, 'category' => 'Makanan Utama'],
                                ['id' => 5, 'name' => 'Es Dawet Ayu', 'price' => 15000, 'category' => 'Minuman'],
                                ['id' => 6, 'name' => 'Es Teh Manis', 'price' => 8000, 'category' => 'Minuman'],
                                ['id' => 7, 'name' => 'Jus Alpukat', 'price' => 18000, 'category' => 'Minuman'],
                                ['id' => 8, 'name' => 'Pisang Goreng Keju', 'price' => 12000, 'category' => 'Dessert']
                            ];
                            @endphp
                            @foreach($menuData as $index => $menu)
                            <div class="bg-gray-700/50 rounded-lg p-4 border border-gray-600">
                                <div class="flex items-start space-x-3">
                                    <input type="checkbox" name="selected_menus[]" value="{{ $menu['id'] }}" 
                                           class="mt-1 text-green-500 focus:ring-green-500 rounded">
                                    <div class="flex-1 min-w-0">
                                        <h4 class="font-medium text-white">{{ $menu['name'] }}</h4>
                                        <p class="text-sm text-gray-400 mb-2">{{ $menu['category'] }}</p>
                                        <p class="text-green-500 font-semibold">Rp {{ number_format($menu['price'], 0, ',', '.') }}</p>
                                        
                                        <div class="mt-3 flex items-center space-x-2">
                                            <label class="text-sm text-gray-400">Jumlah:</label>
                                            <input type="number" name="quantities[]" value="1" min="1" 
                                                   class="w-20 px-2 py-1 bg-gray-600 border border-gray-500 rounded text-white text-sm focus:outline-none focus:border-green-500"
                                                   disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                
                <!-- Order Summary -->
                <div id="order-summary" class="mb-8 hidden">
                    <h3 class="text-xl font-semibold mb-4">Ringkasan Pesanan</h3>
                    <div class="bg-gray-700/50 rounded-lg p-4 border border-gray-600">
                        <div id="summary-items" class="space-y-2 mb-4"></div>
                        <div class="border-t border-gray-600 pt-4">
                            <div class="flex justify-between items-center text-lg font-semibold">
                                <span>Total:</span>
                                <span id="total-price" class="text-green-500">Rp 0</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Additional Notes -->
                <div class="mb-8">
                    <label class="block text-gray-300 text-sm font-medium mb-2">
                        <i class="fas fa-sticky-note mr-2"></i>Catatan Tambahan
                    </label>
                    <textarea name="notes" rows="4" 
                              class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:outline-none focus:border-green-500 focus:ring-1 focus:ring-green-500 text-white resize-none"
                              placeholder="Permintaan khusus, alergi makanan, atau catatan lainnya..."></textarea>
                </div>
                
                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" 
                            class="bg-gradient-to-r from-green-600 to-green-700 hover:from-green-700 hover:to-green-800 text-white px-12 py-4 rounded-lg text-lg font-semibold transition duration-300 btn-glow inline-flex items-center">
                        <i class="fab fa-whatsapp mr-3 text-xl"></i>
                        Kirim Reservasi via WhatsApp
                    </button>
                    <p class="text-gray-400 text-sm mt-4">
                        Reservasi akan dikirim melalui WhatsApp untuk konfirmasi lebih lanjut
                    </p>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Information Section -->
<section class="py-20 bg-black">
    <div class="container mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold mb-6">Informasi Penting</h2>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <div class="text-center p-6 bg-gray-800/50 rounded-xl border border-gray-700">
                <div class="bg-green-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-clock text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Jam Operasional</h3>
                <p class="text-gray-400">Senin - Kamis: 10:00 - 22:00</p>
                <p class="text-gray-400">Jumat - Minggu: 10:00 - 23:00</p>
            </div>
            
            <div class="text-center p-6 bg-gray-800/50 rounded-xl border border-gray-700">
                <div class="bg-green-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-info-circle text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Kebijakan Reservasi</h3>
                <p class="text-gray-400">Reservasi maksimal 14 hari ke depan</p>
                <p class="text-gray-400">Konfirmasi dalam 1x24 jam</p>
            </div>
            
            <div class="text-center p-6 bg-gray-800/50 rounded-xl border border-gray-700">
                <div class="bg-green-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-phone text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Hubungi Kami</h3>
                <p class="text-gray-400">WhatsApp: +62 812-3456-7890</p>
                <p class="text-gray-400">Telepon: (0274) 123-456</p>
            </div>
        </div>
    </div>
</section>

<script>
    // Menu data for calculations
    const menuData = {
        @foreach($menus as $menu)
        {{ $menu['id'] }}: {
            name: '{{ $menu['name'] }}',
            price: {{ $menu['price'] }}
        },
        @endforeach
    };
    
    // Handle menu selection
    document.addEventListener('DOMContentLoaded', function() {
        const checkboxes = document.querySelectorAll('input[name="selected_menus[]"]');
        const quantities = document.querySelectorAll('input[name="quantities[]"]');
        const orderSummary = document.getElementById('order-summary');
        const summaryItems = document.getElementById('summary-items');
        const totalPrice = document.getElementById('total-price');
        
        checkboxes.forEach((checkbox, index) => {
            checkbox.addEventListener('change', function() {
                const quantityInput = quantities[index];
                quantityInput.disabled = !this.checked;
                if (!this.checked) {
                    quantityInput.value = 1;
                }
                updateSummary();
            });
            
            quantities[index].addEventListener('input', updateSummary);
        });
        
        function updateSummary() {
            let total = 0;
            let hasSelectedItems = false;
            summaryItems.innerHTML = '';
            
            checkboxes.forEach((checkbox, index) => {
                if (checkbox.checked) {
                    hasSelectedItems = true;
                    const menuId = parseInt(checkbox.value);
                    const quantity = parseInt(quantities[index].value) || 1;
                    const menu = menuData[menuId];
                    const subtotal = menu.price * quantity;
                    total += subtotal;
                    
                    const itemDiv = document.createElement('div');
                    itemDiv.className = 'flex justify-between items-center';
                    itemDiv.innerHTML = `
                        <span>${menu.name} x${quantity}</span>
                        <span class="text-green-500">Rp ${subtotal.toLocaleString('id-ID')}</span>
                    `;
                    summaryItems.appendChild(itemDiv);
                }
            });
            
            if (hasSelectedItems) {
                orderSummary.classList.remove('hidden');
                totalPrice.textContent = `Rp ${total.toLocaleString('id-ID')}`;
            } else {
                orderSummary.classList.add('hidden');
            }
        }
    });
</script>

@endsection