@extends('template')
@section('main')
@include('partials.navbar')
@include('partials.sidebar')
    <h1>Halaman Kategori</h1>
    <section class="section">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Kategori</h5>
                    <a href="{{ url('kategori/create') }}" class="btn btn-primary">Tambah Kategori</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Kategori</th>
                                <th scope="col">Deskripsi Kategori</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->namaKategori }}</td>
                                <td>{{ $item->descKategori }}</td>
                                <td>
                                    <a href="{{ route('kategori.edit', $item->id) }}" class="btn btn-warning">Update</a>
                                    <form action="{{ route('kategori.destroy', $item->id) }}" method="POST">
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
