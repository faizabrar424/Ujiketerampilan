<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Kategori::all();
        return view('kategori', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tambahkategori');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'namaKategori' => 'required|string',
            'descKategori' => 'required|string',
        ]);
        Kategori::create($validator);
        return redirect('kategori');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Kategori::find($id);
        return view('editkategori', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = $request->validate([
            'namaKategori' => 'required|string',
            'descKategori' => 'required|string',
        ]);
        Kategori::find($id)->update($validator);
        return redirect('kategori');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Kategori::find($id)->delete();
        return redirect('kategori');
    }
}
