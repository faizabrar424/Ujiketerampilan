@extends('template')
@section('main')
    <section class="section">
        <div class="row">
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Produk</h5>
                        <form action="{{ route('produk.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="namaProduk">Nama Produk</label>
                                <input type="text" class="form-control" id="namaProduk" name="namaProduk" value="{{ $data->namaProduk }}">
                                @error('namaProduk')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="foto">Foto</label>
                                <input type="file" class="form-control" id="foto" name="foto">
                                @error('foto')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!-- Menampilkan gambar yang sudah diupload sebelumnya -->
                            @if(!empty($data->foto))
                                <div class="form-group">
                                    <label>Foto Sebelumnya:</label>
                                    <br>
                                    <img src="{{ asset('storage/' . $data->foto) }}" alt="Foto Produk" width="100">
                                </div>
                            @endif
                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <input type="number" class="form-control" name="harga" value="{{ $data->harga }}"></input>
                                @error('harga')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="descProduk">Deskripsi Produk</label>
                                <textarea class="form-control" id="descProduk" name="descProduk" rows="5" >{{ $data->descProduk }}</textarea>
                                @error('descProduk')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="kategori_id">Kategori</label>
                                <select class="form-control" name="kategori_id">
                                    @foreach($kategori as $item)
                                        <option value="{{ $item->id }}">{{ $item->namaKategori}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
    </section>
@endsection
