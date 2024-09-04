@extends('template')
@section('main')
    <section class="section">
        <div class="row">
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tambah Kategori</h5>
                        <form action="{{ route('kategori.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Nama Kategori</label>
                                <input type="Text" class="form-control" name="namaKategori">
                                @error('namaKategori')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Deskripsi Kategori</label>
                                <textarea class="form-control" name="descKategori" rows="5"></textarea>
                                @error('descKategori')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
