@extends('layouts.main')
@section('container')
    <div class="row">
        <div class="col-md-4 col-sm-12 mt-3">
            <div class="bg-white rounded p-3">
                <p class="text-title1 text-blue mb-3">Total Barang</p>
                <div class="d-flex justify-content-between">
                    <h1 class="text-blue">{{ $totalBarang }}<span class="text-title1">item</span></h1>
                    <img src="{{ url('/images/icon/ic_all.svg') }}" alt="all">
                </div>

                </h1>
                <p class="text-title2 text-blue">/Minggu ini</p>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 mt-3">
            <div class="bg-white rounded p-3">
                <p class="text-title1 text-blue mb-3">Barang Masuk</p>
                <div class="d-flex justify-content-between">
                    <h1 class="text-blue">35<span class="text-title1">item</span></h1>
                    <img src="{{ url('/images/icon/ic_inbound.svg') }}" alt="all">
                </div>

                </h1>
                <p class="text-title2 text-blue">/Minggu ini</p>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 mt-3">
            <div class="bg-white rounded p-3">
                <p class="text-title1 text-blue mb-3">Barang Masuk</p>
                <div class="d-flex justify-content-between">
                    <h1 class="text-blue">35<span class="text-title1">item</span></h1>
                    <img src="{{ url('/images/icon/ic_outbound.svg') }}" alt="all">
                </div>

                </h1>
                <p class="text-title2 text-blue">/Minggu ini</p>
            </div>
        </div>
        <div class="col-md-5 mt-3">
            <div class="bg-white rounded p-3">
                <p class="text-blue text-title1 mb-3">Stok Barang<span class="text-blue text-title2"> /kategori</span>
                </p>
                </h1>
                @foreach($stokKategori as $stok)
                    <div class="d-flex justify-content-between mb-3">
                        <div class="d-flex flex-column bg-red rounded w-25">
                            <h2 class="m-auto text-white">{{ $stok->total }}</h2>
                            <p class="m-auto text-white">item</p>
                        </div>
                        <h5 class="text-blue font-weight-bold m-auto">{{ $stok->nama_kategori }}</h5>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
