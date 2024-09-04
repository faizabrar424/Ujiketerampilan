@extends('template')
@section('main')
    <section class="section">
        <div class="row">
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Post</h5>
                        <form action="{{ route('post.update', $data->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Judul</label>
                                <input type="Text" class="form-control" name="judul" value="{{ $data->judul }}">
                                @error('nis')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Isi</label>
                                <textarea class="form-control" name="isi" rows="5">{{ $data->isi }}</textarea>
                                @error('isi')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Tanggal dibuat</label>
                                <input type="string" class="form-control" name="tanggalDibuat"
                                    value="{{ $data->tanggalDibuat }}" readonly>
                                @error('tanggalDibuat')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Kategori</label>
                                <select class="form-control" name="kategori_id">
                                    @foreach ($kategori as $item)
                                        <option value="{{ $item->id }}"@selected($data->kategori_id == $item->id)>
                                            {{ $item->namaKategori }}</option>
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
