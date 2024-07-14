<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    public function subkategori()
    {
        return $this->belongsTo(Subkategori::class);
    }
    public function merek()
    {
        return $this->belongsTo(Merek::class);
    }

    public function relatedProducts($limit = 6)
    {
        if ($this->subkategori_id) {
            return Produk::where('subkategori_id', $this->subkategori_id)
                          ->where('id', '!=', $this->id)
                          ->take($limit)
                          ->get();
        } else {
            return Produk::where('kategori_id', $this->kategori_id)
                          ->where('id', '!=', $this->id)
                          ->take($limit)
                          ->get();
        }
    }
}
