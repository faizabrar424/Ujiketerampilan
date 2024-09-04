@extends('template')
@section('main')
    <section class="section">
        <div class="row">
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tambah Produk</h5>
                        <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="namaProduk">Nama Produk</label>
                                <input type="text" class="form-control" id="namaProduk" name="namaProduk" required>
                                @error('namaProduk')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="foto">Foto</label>
                                <div class="custom-file w-50 mb-3">
                                    <input type="file" class="custom-file-input" id="foto" name="foto" required>
                                    <label class="custom-file-label" for="foto">Pilih Foto</label>
                                </div>
                                @error('foto')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="deskripsiProduk">Deskripsi Produk</label>
                                <textarea class="form-control" id="deskripsiProduk" name="descProduk" rows="5" required></textarea>
                                @error('descProduk')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
