<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use App\Models\Subkategori;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    function index()
    {
        $kategoris = Kategori::with('subkategoris')->get();
        $produks = Produk::all();
        return view('Produk',
        ['produks' => $produks,
        'kategoris' => $kategoris
        ]);
    }

    function Produk_detail($id)
    {
        $produks = Produk::find($id);
        return view('Produk_detail',['produks' => $produks]);
    }

}
