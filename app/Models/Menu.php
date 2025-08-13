<?php

// app/Models/Menu.php (Optional - jika ingin menggunakan model)
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description', 
        'price',
        'image',
        'category',
        'is_featured',
        'is_available'
    ];

    protected $casts = [
        'price' => 'integer',
        'is_featured' => 'boolean',
        'is_available' => 'boolean',
    ];
}

