@extends('layouts.main')
@section('container')
    <div class="row">
        <div class="col-md-10 offset-md-1 mt-5 ">
            <h3 class="text-blue font-weight-bold">
                Data Kategori
            </h3>
        </div>
        <div class="col-md-10 offset-md-1 ">
            <table id="myTable" class="table table-stripped text-grey">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Kode Kategori</th>
                    <th>Nama Kategori</th>
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
            ajax: '{{ route('category.data') }}',
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
                {data: 'kode_kategori', name: 'kode_kategori'},
                {data: 'nama_kategori', name: 'nama_kategori'},
                {data: 'action', name: 'action'},
            ]
        });
    </script>
@endsection
