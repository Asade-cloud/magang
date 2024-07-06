<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subkategori extends Model
{
    use HasFactory;

    public function kategoris()
    {
        return $this->belongsTo(Kategori::class);
    }
    public function produks()
    {
        return $this->hasMany(Produk::class);
    }

}

