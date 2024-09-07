<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('template', function () {
    return view('template');
});

Route::get('post', function () {
    return view('post');
});

Route::get('beranda', function () {
    return view('beranda');
});

Route::get('detail', function () {
   return view('detail');
});

Route::get('produk', function () {
    return view('produk');
 });
 
Route::get('post', [PostController::class, 'index']);

Route::get('/', [BerandaController::class, 'index']);

Route::get('kategori', [KategoriController::class, 'index']);

Route::get('produk', [ProdukController::class, 'index']);

Route::get('user', [UserController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('post/{id}', [BerandaController::class, 'show'])->name('post.show');

Route::middleware(['auth'])->group(function () {

    Route::middleware(['role:1,2'])->group(function () {
        Route::resource('post', PostController::class);
        Route::resource('kategori', KategoriController::class);
        Route::resource('produk', ProdukController::class);
    });

    Route::middleware(['role:1'])->group(function () {
        Route::resource('user', UserController::class);
    });
});

