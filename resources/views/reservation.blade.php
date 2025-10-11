@extends('layouts.app')

@section('title', 'Reservasi - MJ Coffee Shop')

@section('content')

<!-- Header Section -->
<section class="py-20 bg-gradient-to-r from-yellow-600 via-yellow-500 to-yellow-700 shadow-lg">
    <div class="container mx-auto px-6 text-center">
        <h1 class="text-5xl font-extrabold mb-6 text-black drop-shadow-lg">Reservasi Meja</h1>
        <p class="text-lg text-gray-800 font-medium max-w-3xl mx-auto">
            Reservasi meja Anda sekarang dan nikmati pengalaman kuliner terbaik bersama keluarga dan teman-teman.
        </p>
    </div>
</section>

<!-- Reservation Form Section -->
<section class="py-20 bg-gradient-to-b from-gray-900 to-black">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <form action="{{ route('reservation.store') }}" method="POST"
                  class="bg-gray-800/50 rounded-2xl p-8 border border-gray-700">
                @csrf
                
                <!-- Informasi Reservasi -->
                <div class="mb-8">
                    <h2 class="text-2xl font-bold mb-6 text-center text-white">Informasi Reservasi</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-300 text-sm font-medium mb-2">
                                Nama Lengkap
                            </label>
                            <input type="text" name="name" required
                                   class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-green-500"
                                   placeholder="Masukkan nama lengkap">
                        </div>

                        <div>
                            <label class="block text-gray-300 text-sm font-medium mb-2">
                                Nomor Telepon
                            </label>
                            <input type="tel" name="phone" required
                                   class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-green-500"
                                   placeholder="08xxxxxxxxxx">
                        </div>
                    </div>
                </div>

                <!-- Detail Reservasi -->
                <div class="mb-8">
                    <h3 class="text-xl font-semibold mb-4 text-white">Detail Reservasi</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div>
                            <label class="block text-gray-300 text-sm font-medium mb-2">Tanggal</label>
                            <input type="date" name="date" required min="{{ date('Y-m-d') }}"
                                   class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-green-500">
                        </div>

                        <div>
                            <label class="block text-gray-300 text-sm font-medium mb-2">Waktu</label>
                            <select name="time" required
                                    class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-green-500">
                                <option value="">Pilih Waktu</option>
                                @for ($i = 10; $i <= 21; $i++)
                                    <option value="{{ sprintf('%02d:00', $i) }}">{{ sprintf('%02d:00 WIB', $i) }}</option>
                                @endfor
                            </select>
                        </div>

                        <div>
                            <label class="block text-gray-300 text-sm font-medium mb-2">Jumlah Tamu</label>
                            <select name="guests" required
                                    class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-green-500">
                                <option value="">Pilih Jumlah</option>
                                @for($i=1;$i<=20;$i++)
                                    <option value="{{ $i }}">{{ $i }} orang</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Filter Kategori -->
                <div class="mb-8">
                    <h3 class="text-xl font-semibold mb-3 text-white">Filter Menu</h3>
                    <div class="flex flex-wrap gap-3">
                        <button type="button" data-filter="" class="filter-btn bg-green-700 hover:bg-green-600 text-white px-5 py-2 rounded-lg font-semibold">Semua</button>
                        <button type="button" data-filter="Makanan" class="filter-btn bg-green-700 hover:bg-green-600 text-white px-5 py-2 rounded-lg font-semibold">Makanan</button>
                        <button type="button" data-filter="Dessert" class="filter-btn bg-green-700 hover:bg-green-600 text-white px-5 py-2 rounded-lg font-semibold">Dessert</button>
                        <button type="button" data-filter="Coffee" class="filter-btn bg-green-700 hover:bg-green-600 text-white px-5 py-2 rounded-lg font-semibold">Minuman</button>
                    </div>
                </div>

                <!-- Menu List -->
                <div id="menu-selection" class="space-y-4 mb-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        @foreach($menus as $menu)
                        <div class="menu-item bg-gray-700/50 rounded-lg p-4 border border-gray-600" data-category="{{ $menu['category'] }}">
                            <div class="flex items-start space-x-3">
                                <input type="checkbox" name="selected_menus[]" value="{{ $menu['id'] }}" class="mt-1 text-green-500 focus:ring-green-500 rounded">
                                <div class="flex-1">
                                    <h4 class="font-semibold text-white">{{ $menu['name'] }}</h4>
                                    <p class="text-sm text-gray-400 mb-2">{{ $menu['category'] }}</p>
                                    <p class="text-green-400 font-semibold mb-2">Rp {{ number_format($menu['price'], 0, ',', '.') }}</p>
                                    <div class="flex items-center space-x-2">
                                        <label class="text-sm text-gray-400">Jumlah:</label>
                                        <input type="number" name="quantities[]" value="1" min="1" class="w-20 px-2 py-1 bg-gray-600 border border-gray-500 rounded text-white text-sm" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Ringkasan Pesanan -->
                <div id="order-summary" class="mb-8 hidden">
                    <h3 class="text-xl font-semibold mb-4 text-white">Ringkasan Pesanan</h3>
                    <div class="bg-gray-700/50 rounded-lg p-4 border border-gray-600 text-white">
                        <div id="summary-items" class="space-y-2 mb-4"></div>
                        <div class="border-t border-gray-600 pt-4">
                            <div class="flex justify-between text-lg font-semibold">
                                <span>Total:</span>
                                <span id="total-price" class="text-green-400">Rp 0</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Catatan Tambahan -->
                <div class="mb-8">
                    <label class="block text-gray-300 text-sm font-medium mb-2">Catatan Tambahan</label>
                    <textarea name="notes" rows="4"
                              class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-green-500 resize-none"
                              placeholder="Permintaan khusus, alergi makanan, atau catatan lainnya..."></textarea>
                </div>

                <!-- Tombol Submit -->
                <div class="text-center">
                    <button type="submit" class="bg-green-700 hover:bg-green-800 text-white px-12 py-4 rounded-lg text-lg font-semibold transition duration-300 inline-flex items-center">
                        <i class="fab fa-whatsapp mr-3 text-xl"></i> Kirim Reservasi via WhatsApp
                    </button>
                    <p class="text-gray-400 text-sm mt-4">
                        Reservasi akan dikirim melalui WhatsApp untuk konfirmasi lebih lanjut
                    </p>
                </div>
            </form>
        </div>
    </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", function() {
    // filter kategori
    const filterButtons = document.querySelectorAll('.filter-btn');
    const menuItems = document.querySelectorAll('.menu-item');

    filterButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            const category = btn.getAttribute('data-filter').toLowerCase();
            filterButtons.forEach(b => b.classList.remove('ring-2', 'ring-white'));
            btn.classList.add('ring-2', 'ring-white');

            menuItems.forEach(item => {
                const cat = item.dataset.category.toLowerCase();
                if (!category) item.style.display = 'block';
                else if (category === 'coffee' && ['coffee', 'latte', 'milk series', 'tea & wedang', 'squash', 'minuman'].includes(cat))
                    item.style.display = 'block';
                else item.style.display = cat === category ? 'block' : 'none';
            });
        });
    });

    // total harga
    const checkboxes = document.querySelectorAll('input[name="selected_menus[]"]');
    const quantities = document.querySelectorAll('input[name="quantities[]"]');
    const orderSummary = document.getElementById('order-summary');
    const summaryItems = document.getElementById('summary-items');
    const totalPrice = document.getElementById('total-price');

    checkboxes.forEach((cb, index) => {
        cb.addEventListener('change', function() {
            const q = quantities[index];
            q.disabled = !this.checked;
            if (!this.checked) q.value = 1;
            updateSummary();
        });
        quantities[index].addEventListener('input', updateSummary);
    });

    function updateSummary() {
        let total = 0;
        let any = false;
        summaryItems.innerHTML = '';

        checkboxes.forEach((cb, index) => {
            if (cb.checked) {
                any = true;
                const card = cb.closest('.menu-item');
                const name = card.querySelector('h4').textContent;
                const price = parseInt(card.querySelector('.text-green-400').textContent.replace(/\D/g, ''));
                const qty = parseInt(quantities[index].value);
                const subtotal = price * qty;
                total += subtotal;

                summaryItems.innerHTML += `
                    <div class="flex justify-between">
                        <span>${name} x${qty}</span>
                        <span class="text-green-400">Rp ${subtotal.toLocaleString('id-ID')}</span>
                    </div>`;
            }
        });

        orderSummary.classList.toggle('hidden', !any);
        totalPrice.textContent = 'Rp ' + total.toLocaleString('id-ID');
    }
});
</script>

@endsection