<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detail_Transaksi extends Model
{
    protected $fillable = [
        'id_transaksi',
        'id_paket',
        'qty',
        'keterangan'
    ];

    protected $table = 'detail_transaksi';
}