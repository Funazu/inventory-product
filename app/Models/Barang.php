<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barangs';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama_barang', 'harga', 'desc', 'stok', 'category_id', 'image'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
}
