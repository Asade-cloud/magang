<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    function index()
    {
        $produks = Produk::all();
        return view('Produk',['produks' => $produks]);
    }

    function Produk_detail($id)
    {
        $produks = Produk::find($id);
        return view('Produk_detail',['produks' => $produks]);
    }

}
