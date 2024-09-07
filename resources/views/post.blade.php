@extends('template')
@section('main')
@include('partials.sidebar')
    <h1>Halaman Post</h1>
    <section class="section">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Posting</h5>
                    <a href="{{ url('post/create') }}" class="btn btn-primary">Tambah Post</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Isi</th>
                                <th scope="col">Tanggal Dibuat</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->judul }}</td>
                                <td>{{ $item->isi }}</td>
                                <td>{{ $item->tanggalDibuat }}</td>
                                <td>{{ $item->kategori->namaKategori }}</td>
                                <td>
                                    <a href="{{ route('post.edit', $item->id) }}" class="btn btn-warning">Update</a>
                                    <form action="{{ route('post.destroy', $item->id) }}" method="POST">
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
