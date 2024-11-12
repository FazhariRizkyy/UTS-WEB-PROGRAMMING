<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    protected $fillable = [
        'id_outlet',
        'jenis',
        'nama_paket',
    ];

    protected $table = 'paket';
    public function outlet(){
        return $this->belongsTo(Outlet::class, 'id_outlet', 'id');
    }
}
