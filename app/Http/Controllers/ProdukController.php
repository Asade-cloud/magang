<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use App\Models\Merek;
use App\Models\Subkategori;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    function index(Request $request)
    {
        $kategoris = Kategori::with(['subkategoris' => function($query) {
            $query->orderBy('nama_subkategori', 'asc'); // Mengurutkan subkategori berdasarkan abjad
        }])->orderBy('nama_kategori', 'asc')->get(); // Mengurutkan kategori berdasarkan abjad

        $query = Produk::query();

        if ($request->has('kategori_id')) {
            $query->where('kategori_id', $request->kategori_id);
        }

        if ($request->has('subkategori_id')) {
            $query->where('subkategori_id', $request->subkategori_id);
        }

        $produks = $query->get();

        $produks = $query->paginate(5);


        return view('Produk',
        ['produks' => $produks,
        'kategoris' => $kategoris
        ]);
    }

    function Produk_detail($id)
    {
        $produks = Produk::findOrFail($id);
        $kategoris = Kategori::find($produks->kategori_id);
        $subkategoris = Subkategori::find($produks->subkategori_id);

        return view('Produk_detail',[
            'produks' => $produks,
            'kategoris' => $kategoris,
            'subkategoris' => $subkategoris

    ]);
    }

    public function create()
    {
        $mereks = Merek::all();
        $kategoris = Kategori::with(['subkategoris' => function($query) {
            $query->orderBy('nama_subkategori', 'asc'); // Mengurutkan subkategori berdasarkan abjad
        }])->orderBy('nama_kategori', 'asc')->get(); // Mengurutkan kategori berdasarkan abjad

        // $subkategoris = Subkategori::all();
        return view('Produk_Create', compact('mereks', 'kategoris'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_produk' => 'required|string|max:255',
            'harga' => 'required|integer',
            'kategori_id' => 'required|integer',
            'subkategori_id' => 'required|integer',
            'merek_id' => 'required|integer',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'subimage' => 'integer',
            'deskripsi' => 'required|string',
        ]);

        // Menghandle upload gambar
        if ($request->hasFile('img')) {

            $image = $request->file('img');
            $imagePath = $image->store('images', 'public');
        }

        $produk = new Produk();
        $produk->nama_produk = $validated['nama_produk'];
        $produk->harga = $validated['harga'];
        $produk->kategori_id = $validated['kategori_id'];
        $produk->subkategori_id = $validated['subkategori_id'];
        $produk->merek_id = $validated['merek_id'];
        $produk->img = $imagePath;
        $produk->subimage = $validated['subimage'];
        $produk->deskripsi = $validated['deskripsi'];
        $produk->save();

        return redirect()->route('Produk')->with('success', 'Produk berhasil ditambahkan');
    }

}
