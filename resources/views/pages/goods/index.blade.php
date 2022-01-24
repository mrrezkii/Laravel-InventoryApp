@extends('layouts.main')
@section('custom-head')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.css"/>
@endsection
@section('container')
    <div class="row">
        {{--        <div class="col-md-10 offset-md-1 mt-1 ">--}}
        {{--            <h3 class="text-blue font-weight-bold">--}}
        {{--                Data Barang--}}
        {{--            </h3>--}}
        {{--        </div>--}}
        <div class="col-md-10 offset-md-1 mt-5 ">
            <a href="{{ url('/goods/create') }}" class="btn btn-success float-right mb-3">
                <i class="fas fa-plus-circle"></i>
                Tambahkan
            </a>
        </div>
        <div class="col-md-10 offset-md-1 ">
            <table id="myTable" class="table table-stripped text-grey" width="100%">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Kode Kategori</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Harga Barang</th>
                    <th>Gambar</th>
                    <th>Kadaluarsa</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>

    </div>
@endsection
@section('custom-script')
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.js"></script>
    <script>
        $('#myTable').DataTable({
            processing: true,
            serverSide: true,
            "scrollX": true,
            responsive: true,
            ajax: '{{ route('goods.data') }}',
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
                {data: 'kode_kategori', name: 'kode_kategori'},
                {data: 'kode_barang', name: 'kode_barang'},
                {data: 'nama_barang', name: 'nama_barang'},
                {data: 'harga_barang', name: 'harga_barang'},
                {data: 'gambar_barang', name: 'gambar_barang'},
                {data: 'kadaluarsa_barang', name: 'kadaluarsa_barang'},
                {data: 'action', name: 'action'},
            ]
        });
    </script>
@endsection
