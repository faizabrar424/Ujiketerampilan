<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProdukController;
use App\Models\Post;
use App\Models\Produk;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('template', function () {
    return view('template');
});

Route::get('beranda', function () {
    return view('beranda');
});

Route::get('tampilanuser', function () {
    return view('tampilanuser');
});

Route::get('detail', function () {
   return view('detail');
});

Route::get('produk', function () {
    return view('produk');
 });
 

Route::get('beranda', [PostController::class, 'index']);

Route::get('tampilanuser', [PostController::class, 'showUserData']);

Route::resource('post', PostController::class);

Route::get('kategori', [KategoriController::class, 'index']);

Route::resource('kategori', KategoriController::class);

Route::get('produk', [ProdukController::class, 'index']);

Route::resource('produk', ProdukController::class);