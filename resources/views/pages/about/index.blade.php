@extends('layouts.main')
@section('container')
    @include('partials.overview')
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="d-flex">
                <img class="img-fluid m-auto" src="{{ url('/images/logo.png') }}" alt="logo">
            </div>
        </div>
        <div class="col-md-10 offset-md-1">
            <div class="d-flex flex-column mt-3">
                <p class="text-title1 text-blue">Bakul Anies yang merupakan salah satu toko kelontong yang menjual
                    sembako, alat tulis, dan aksesoris sekolah.</p>
                <p class="text-title1 text-blue">Dalam Website Bakul Anies menerapkan sistem inventory untuk stok barang
                    yang mampu memproses data secara cepat, akurat dan secara otomatis mampu menyimpan serta menampilkan
                    data transaksi. </p>
            </div>
        </div>
    </div>
@endsection
