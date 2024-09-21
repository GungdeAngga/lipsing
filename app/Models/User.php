<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = ['name', 'email', 'password'];

    public static function find($id)
    {
        if ($id == 1) {
            return new self([
                'id' => 1,
                'name' => 'Admin',
                'password' => bcrypt('admin123'),
            ]);
        }

        return null;
    }
}
