@extends('template')
@section('main')
    <h1>Post News</h1>
    <section class="section profile">
        <div class="row">
            <div class="col-xl-8">
                @foreach ($data as $item)
                    <div class="card">
                        <div class="card-body pt-3">
                            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                <h5 class="card-title">{{ $item->judul }}</h5>
                                <p class="small fst-italic">{{ $item->isi }}</p>
                                <p class="small fst-italic">{{ $item->tanggalDibuat }}</p>
                                <div class="d-flex justify-content-end">
                                    <a href="{{ route('post.show', $item->id) }}" class="btn btn-primary">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
