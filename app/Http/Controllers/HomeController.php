<?php

// app/Http/Controllers/HomeController.php - Versi Sederhana
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   
// ...existing code...
public function index()
{
    $featuredMenus = [
        [
            'id' => 1,
            'name' => 'Mie dok dok',
            'description' => 'mie degan paduan rempah rempah dan telur',
            'price' => 14000,
            'category' => 'Makanan Utama',
            'image' => asset('images/menu/miedok.jpg')
        ],
        [
            'id' => 2,
            'name' => 'Seblak',
            'description' => 'seblak mix bumbu spesial',
            'price' => 15000,
            'category' => 'Makanan Utama',
            'image' => asset('images/menu/seblak.jpg')
        ],
        [
            'id' => 3,
            'name' => 'mix seris',
            'description' => 'kentang goreng,nuget goreng,sosis goreng dan saus cocol;',
            'price' => 15000,
            'category' => 'makanan',
            'image' => asset('images/menu/mix.jpg')
        ]
    ];

    return view('home', compact('featuredMenus'));
}
}
// ...existing code...