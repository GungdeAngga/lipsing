<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Potensi extends Model
{
    use HasFactory;

    protected $fillable = [
        'potensi',
        'category_potensi',
        'description_potensi',
        'address_potensi',
        'kecamatan_potensi',
        'youtube_potensi',
        'map_link_potensi',
        'image_path',
    ];
}
