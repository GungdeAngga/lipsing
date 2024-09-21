<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_desa',
        'description_desa',
        'total_resident_desa',
        'kecamatan_desa',
        'map_link_desa',
    ];
}
