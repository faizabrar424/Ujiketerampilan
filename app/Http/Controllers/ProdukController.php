<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Produk::all();
        return view('produk', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('tambahproduk', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'namaProduk' => 'required|string',
            'foto' => 'required',
            'harga' => 'required|integer',
            'descProduk' => 'required|string',
            'kategori_id' => 'required|integer'
        ]);

        $validator['foto'] = $request->file('foto')->store('img', 'public');

        Produk::create($validator);
        return redirect('produk');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $kategori = Kategori::findOrFail($id);
        // $produk = $kategori->produk;

        // return view('detail', compact('kategori', 'produk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Produk::find($id);
        $kategori = Kategori::all();

        return view('editproduk', compact('data', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi input, foto dibuat nullable agar bisa opsional
        $validator = $request->validate([
            'namaProduk' => 'required|string',
            'foto' => 'required',
            'harga' => 'required|numeric',
            'descProduk' => 'required|string',
            'kategori_id' => 'required|integer'
        ]);

        $produk = Produk::find($id);
        if ($request->hasFile('foto')) {
            if ($produk->foto) {
                Storage::disk('public')->delete($produk->foto);
            }

            $validator['foto'] = $request->file('foto')->store('img', 'public');
        } else {
            unset($validator['foto']);
        }

        $produk->update($validator);

        // dd($validator);
        return redirect('produk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produk = Produk::find($id);

        if ($produk) {
            if ($produk->foto) {
                Storage::disk('public')->delete($produk->foto);
            }
            $produk->delete();
        }
        return redirect('produk');
    }
}
