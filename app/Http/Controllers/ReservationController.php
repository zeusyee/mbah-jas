<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $menus = [
            [
                'id' => 1,
                'name' => 'Nasi Gudeg Yogya',
                'price' => 25000,
                'category' => 'Makanan Utama'
            ],
            [
                'id' => 2,
                'name' => 'Sate Klathak',
                'price' => 35000,
                'category' => 'Makanan Utama'
            ],
            [
                'id' => 3,
                'name' => 'Ayam Penyet',
                'price' => 28000,
                'category' => 'Makanan Utama'
            ],
            [
                'id' => 4,
                'name' => 'Rawon Daging',
                'price' => 30000,
                'category' => 'Makanan Utama'
            ],
            [
                'id' => 5,
                'name' => 'Es Dawet Ayu',
                'price' => 15000,
                'category' => 'Minuman'
            ],
            [
                'id' => 6,
                'name' => 'Es Teh Manis',
                'price' => 8000,
                'category' => 'Minuman'
            ],
            [
                'id' => 7,
                'name' => 'Jus Alpukat',
                'price' => 18000,
                'category' => 'Minuman'
            ],
            [
                'id' => 8,
                'name' => 'Pisang Goreng Keju',
                'price' => 12000,
                'category' => 'Dessert'
            ]
        ];

        return view('reservation', compact('menus'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'date' => 'required|date',
            'time' => 'required|string',
            'guests' => 'required|integer|min:1',
            'selected_menus' => 'nullable|array',
            'selected_menus.*' => 'integer',
            'quantities' => 'nullable|array',
            'quantities.*' => 'integer|min:1',
            'notes' => 'nullable|string'
        ]);

        $reservationData = $request->only(['name', 'phone', 'date', 'time', 'guests', 'notes']);
        $selectedMenus = $request->input('selected_menus', []);
        $quantities = $request->input('quantities', []);

        $message = "Halo, saya ingin membuat reservasi:\n\n";
        $message .= "Nama: " . $reservationData['name'] . "\n";
        $message .= "No. HP: " . $reservationData['phone'] . "\n";
        $message .= "Tanggal: " . $reservationData['date'] . "\n";
        $message .= "Waktu: " . $reservationData['time'] . "\n";
        $message .= "Jumlah Tamu: " . $reservationData['guests'] . " orang\n";

        if (!empty($selectedMenus)) {
            $message .= "\nMenu yang dipesan:\n";
            $allMenus = $this->getAllMenus();
            $total = 0;
            
            foreach ($selectedMenus as $index => $menuId) {
                $menu = collect($allMenus)->firstWhere('id', $menuId);
                if ($menu && isset($quantities[$index])) {
                    $qty = $quantities[$index];
                    $subtotal = $menu['price'] * $qty;
                    $total += $subtotal;
                    $message .= "- " . $menu['name'] . " x" . $qty . " = Rp " . number_format($subtotal, 0, ',', '.') . "\n";
                }
            }
            $message .= "\nTotal: Rp " . number_format($total, 0, ',', '.') . "\n";
        }

        if ($reservationData['notes']) {
            $message .= "\nCatatan: " . $reservationData['notes'] . "\n";
        }

        $whatsappNumber = env('WHATSAPP_NUMBER', '6281234567890');
        $whatsappUrl = "https://wa.me/" . $whatsappNumber . "?text=" . urlencode($message);

        return redirect()->away($whatsappUrl);
    }

    private function getAllMenus()
    {
        return [
            ['id' => 1, 'name' => 'Nasi Gudeg Yogya', 'price' => 25000],
            ['id' => 2, 'name' => 'Sate Klathak', 'price' => 35000],
            ['id' => 3, 'name' => 'Ayam Penyet', 'price' => 28000],
            ['id' => 4, 'name' => 'Rawon Daging', 'price' => 30000],
            ['id' => 5, 'name' => 'Es Dawet Ayu', 'price' => 15000],
            ['id' => 6, 'name' => 'Es Teh Manis', 'price' => 8000],
            ['id' => 7, 'name' => 'Jus Alpukat', 'price' => 18000],
            ['id' => 8, 'name' => 'Pisang Goreng Keju', 'price' => 12000]
        ];
    }
}