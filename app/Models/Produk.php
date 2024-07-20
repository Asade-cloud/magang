<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_produk',
        'linkmodul',
        'deskripsi',
        'kategori_id',
        'subkategori_id',
        'merek_id'
    ];


    public function gambar()
    {
        return $this->hasMany(Gambar::class);
    }

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
