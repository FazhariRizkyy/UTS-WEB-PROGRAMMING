<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    protected $fillable = [
        'nama',
        'alamat',
    ];

    protected $table = 'outlet';
}
