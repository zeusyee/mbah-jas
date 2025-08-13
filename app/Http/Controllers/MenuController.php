<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus = [
            [
                'id' => 1,
                'name' => 'Nasi Gudeg Yogya',
                'description' => 'Gudeg tradisional dengan ayam kampung, telur, dan sambal krecek. Disajikan dengan nasi hangat dan kerupuk.',
                'price' => 25000,
                'image' => '/images/gudeg.jpg',
                'category' => 'Makanan Utama'
            ],
            [
                'id' => 2,
                'name' => 'Sate Klathak',
                'description' => 'Sate kambing khas Yogyakarta dengan bumbu spesial dan lalapan segar. Dibakar dengan arang kayu.',
                'price' => 35000,
                'image' => '/images/sate-klathak.jpg',
                'category' => 'Makanan Utama'
            ],
            [
                'id' => 3,
                'name' => 'Ayam Penyet',
                'description' => 'Ayam goreng yang dipenyet dengan sambal terasi pedas, lalapan, dan nasi putih.',
                'price' => 28000,
                'image' => '/images/ayam-penyet.jpg',
                'category' => 'Makanan Utama'
            ],
            [
                'id' => 4,
                'name' => 'Rawon Daging',
                'description' => 'Sup daging sapi hitam khas Jawa Timur dengan bumbu kluwek yang kaya rempah.',
                'price' => 30000,
                'image' => '/images/rawon.jpg',
                'category' => 'Makanan Utama'
            ],
            [
                'id' => 5,
                'name' => 'Es Dawet Ayu',
                'description' => 'Minuman tradisional segar dengan dawet hijau, santan, dan gula merah asli.',
                'price' => 15000,
                'image' => '/images/dawet.jpg',
                'category' => 'Minuman'
            ],
            [
                'id' => 6,
                'name' => 'Es Teh Manis',
                'description' => 'Teh manis dingin yang menyegarkan, cocok untuk segala cuaca.',
                'price' => 8000,
                'image' => '/images/es-teh.jpg',
                'category' => 'Minuman'
            ],
            [
                'id' => 7,
                'name' => 'Jus Alpukat',
                'description' => 'Jus alpukat segar dengan susu kental manis dan es batu.',
                'price' => 18000,
                'image' => '/images/jus-alpukat.jpg',
                'category' => 'Minuman'
            ],
            [
                'id' => 8,
                'name' => 'Pisang Goreng Keju',
                'description' => 'Pisang goreng crispy dengan taburan keju parut dan susu kental manis.',
                'price' => 12000,
                'image' => '/images/pisang-goreng.jpg',
                'category' => 'Dessert'
            ]
        ];

        return view('menu', compact('menus'));
    }
}