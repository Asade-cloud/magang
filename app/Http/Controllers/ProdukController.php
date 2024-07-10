<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use App\Models\Subkategori;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    function index(Request $request)
    {
        $kategoris = Kategori::with('subkategoris')->get();

        $query = Produk::query();

        if ($request->has('kategori_id')) {
            $kategoriId = $request->kategori_id;
            $query->whereHas('subkategori.kategori', function ($q) use ($kategoriId) {
                $q->where('id', $kategoriId);
            });
        }

        if ($request->has('subkategori_id')) {
            $query->where('subkategori_id', $request->subkategori_id);
        }

        $produks = $query->get();



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
