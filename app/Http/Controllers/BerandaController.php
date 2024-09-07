<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Post::take(5)->get();
        return view('beranda', compact('data'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Post::find($id);
        $produk = $data->kategori->produk->take(2);
        return view('detail', compact('data', 'produk'));
    }
}
