@extends('template')
@section('main')
    <section class="section">
        <div class="row">
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Kategori</h5>
                        <form action="{{ route('kategori.update', $data->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Nama Kategori</label>
                                <input type="Text" class="form-control" name="namaKategori" value="{{ $data->namaKategori }}">
                                @error('namaKategori')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Isi</label>
                                <textarea class="form-control" name="descKategori" rows="5">{{ $data->descKategori }}</textarea>
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
    </section>
@endsection
