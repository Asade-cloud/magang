<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use App\Models\Merek;
use App\Models\Subkategori;
use App\Models\Gambar;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    function index(Request $request)
    {
        $kategoris = Kategori::with([
            'subkategoris' => function ($query) {
                $query->orderBy('nama_subkategori', 'asc'); // Mengurutkan subkategori berdasarkan abjad
            }
        ])->orderBy('nama_kategori', 'asc')->get(); // Mengurutkan kategori berdasarkan abjad

        // $query = Produk::query();
        $query = Produk::with('gambar'); // Include related gambar


        if ($request->has('kategori_id')) {
            $query->where('kategori_id', $request->kategori_id);
        }

        if ($request->has('subkategori_id')) {
            $query->where('subkategori_id', $request->subkategori_id);
        }

        $produks = $query->get();

        $produks = $query->paginate(5);


        return view(
            'Produk',
            [
                'produks' => $produks,
                'kategoris' => $kategoris,
                'gambar'
            ]
        );
    }

    function Produk_detail($id)
    {
        $produks = Produk::findOrFail($id);
        $kategoris = Kategori::find($produks->kategori_id);
        $subkategoris = Subkategori::find($produks->subkategori_id);
        $relatedProducts = $produks->relatedProducts(6);


        return view('Produk_detail', [
            'produks' => $produks,
            'kategoris' => $kategoris,
            'subkategoris' => $subkategoris,
            'relatedProducts' => $relatedProducts

        ]);
    }




    public function create()
    {
        $mereks = Merek::all();
        $kategoris = Kategori::with([
            'subkategoris' => function ($query) {
                $query->orderBy('nama_subkategori', 'asc'); // Mengurutkan subkategori berdasarkan abjad
            }
        ])->orderBy('nama_kategori', 'asc')->get(); // Mengurutkan kategori berdasarkan abjad

        // $subkategoris = Subkategori::all();
        return view('Produk_Create', compact('mereks', 'kategoris'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_produk' => 'required|string|max:255',
            'kategori_id' => 'required|integer',
            'subkategori_id' => 'nullable|integer',
            'merek_id' => 'required|integer',
            'gambar.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi' => 'nullable|string',
            'linkmodul' => 'nullable|url',
        ]);

        // if ($request->hasFile('img')) {

        //     $image = $request->file('img');
        //     $imagePath = $image->store('images', 'public');
        // }
        $produk = Produk::create([
            'nama_produk' => $validated['nama_produk'],
            'linkmodul' => $validated['linkmodul'],
            'deskripsi' => $validated['deskripsi'],
            'kategori_id' => $validated['kategori_id'],
            'subkategori_id' => $validated['subkategori_id'],
            'merek_id' => $validated['merek_id'],
        ]);

        if ($request->hasFile('gambar')) {
            foreach ($request->file('gambar') as $image) {
                $imagePath = $image->store('images', 'public');
                Gambar::create([
                    'produk_id' => $produk->id,
                    'gambar' => $imagePath,
                ]);
            }
        }

        $produk->save();

        return redirect()->route('Produk')->with('success', 'Produk berhasil ditambahkan');
    }

}
