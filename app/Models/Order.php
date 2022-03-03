<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $primaryKey = 'id';

    protected $fillable = [
        'jumlah_pembelian', 'barang_id', 'total_harga', 'alamat', 'ekspedisi', 'nomer_telepon', 'nama_pembeli'
    ];
}
