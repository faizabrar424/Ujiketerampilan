@extends('template')
@section('main')
    @include('partials.sidebar')
    <h1>Halaman Produk</h1>
    <section class="section">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Produk</h5>
                    <a href="{{ url('produk/create') }}" class="btn btn-primary">Tambah Produk</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Produk</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Deskripsi Produk</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $item->namaProduk }}</td>
                                    <td>
                                        <img src="{{ asset('storage/' . $item->foto) }}" width="50" alt="Foto Produk">
                                    </td>
                                    <td>Rp.{{ number_format($item->harga, 0, ',', '.') }}</td>
                                    <td>{{ $item->descProduk }}</td>
                                    <td>{{ $item->kategori->namaKategori }}</td>
                                    <td>
                                        <a href="{{ route('produk.edit', $item->id) }}" class="btn btn-warning">Update</a>
                                        <form action="{{ route('produk.destroy', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
    </section>
@endsection
