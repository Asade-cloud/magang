<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukdetailController extends Controller
{
    function index($id)
  
    {
        $produks = Produk::find($id);
        return view('Produk_detail',['produks' => $produks]);
    }
}
