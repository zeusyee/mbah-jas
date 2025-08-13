<?php

// app/Http/Controllers/HomeController.php - Versi Sederhana
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featuredMenus = [
            [
                'id' => 1,
                'name' => 'Nasi Gudeg Yogya',
                'description' => 'Gudeg tradisional dengan ayam kampung dan telur',
                'price' => 25000,
                'image' => '/images/gudeg.jpg',
                'category' => 'Makanan Utama'
            ],
            [
                'id' => 2,
                'name' => 'Sate Klathak',
                'description' => 'Sate kambing khas Yogyakarta dengan bumbu spesial',
                'price' => 35000,
                'image' => '/images/sate-klathak.jpg',
                'category' => 'Makanan Utama'
            ],
            [
                'id' => 3,
                'name' => 'Es Dawet Ayu',
                'description' => 'Minuman tradisional segar dengan santan dan gula merah',
                'price' => 15000,
                'image' => '/images/dawet.jpg',
                'category' => 'Minuman'
            ]
        ];

        return view('home', compact('featuredMenus'));
    }
}