@extends('template')
@section('main')
    <section>
        <div class="row">
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body pt-3">
                        <div class="tab-pane fade show active profile-overview" id="profile-overview">
                            <h1 class="card-title display-4">{{ $data->judul }}</h1>
                            <p class="lead">{{ $data->isi }}</p>
                            <p class="small fst-italic">{{ $data->tanggalDibuat }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    @foreach ($produk as $item)
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card revenue-card">
                                <div class="card-body text-start">
                                    <h5 class="card-title">{{ $item->namaProduk }}</h5>
                                    <div class="d-flex justify-content-center">
                                        <img src="{{ asset('storage/' . $item->foto) }}" width="150" alt="Foto Produk">
                                    </div>
                                    <h5 class="fw-bold">Rp.{{ number_format($item->harga, 0, ',', '.') }}</h5>
                                    <h5 class="text-success small pt-1 fw-bold mb-0">{{ $item->descProduk }}</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
