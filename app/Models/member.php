<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    protected $fillable = [
        'nama',
        'alamat',
        'jenis_kelamin'
    ];

    protected $table = 'member';
    public function transaksi(){
        return $this->hasMany(Transaksi::class, 'id');
    }
}
