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
    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function paket(){
        return $this->hasMany(Paket::class, 'id');
    }
    public function transaksi(){
        return $this->hasMany(Transaksi::class, 'id');
    }
}
