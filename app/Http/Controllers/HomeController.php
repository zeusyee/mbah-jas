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
            'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/miedok.jpg?raw=true'
        ],
        [
            'id' => 2,
            'name' => 'Seblak',
            'description' => 'seblak mix bumbu spesial',
            'price' => 15000,
            'category' => 'Makanan Utama',
            'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/seblak.jpg?raw=true'
        ],
        [
            'id' => 3,
            'name' => 'mix seris',
            'description' => 'kentang goreng,nuget goreng,sosis goreng dan saus cocol;',
            'price' => 15000,
            'category' => 'makanan',
            'image' => 'https://github.com/ballf327/mbah-jas-menu/blob/main/menu/mix.jpg?raw=true'
        ]
    ];

    return view('home', compact('featuredMenus'));
}
}
// ...existing code...