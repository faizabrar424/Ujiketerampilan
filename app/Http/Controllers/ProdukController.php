<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;

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
        return view('tambahproduk');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'namaProduk' => 'required|string',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'harga' => 'required|integer',
            'descProduk' => 'required|string',
        ]);

        $path = $request->file('foto')->store('img', 'public');

        $validator['foto'] = $path;

        Produk::create($validator);

        return redirect('produk')->with('success', 'Produk berhasil ditambahkan.');
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kategori = Kategori::findOrFail($id);
        $produk = $kategori->produk;

        return view('detail', compact('kategori', 'produk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
