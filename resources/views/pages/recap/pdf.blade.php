<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="{{ url('/images/logo.png') }}">
    <link href="{{ url('/css/sb-admin-2.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('/css/inventory.css') }}" rel="stylesheet" type="text/css">
</head>

<body id="page-top">
<div id="wrapper">
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 p-5 bg-white rounded">
                        <table id="myTable" class="table table-stripped text-grey" width="100%">
                            <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th class="text-center">Kode Barang</th>
                                <th class="text-center">Tanggal Rekap</th>
                                <th class="text-center">Stok Awal</th>
                                <th class="text-center">Stok Akhir</th>
                                <th class="text-center">Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($dataBarang as $data)
                                <tr>
                                    <th scope="row" class="text-center">{{ (int) $loop->index + 1 }}</th>
                                    <td class="text-center">{{ $data->kode_barang }}</td>
                                    <td class="text-center">{{ $data->tanggal_rekap}}</td>
                                    <td class="text-center">{{ $data->stok_awal_rekap }}</td>
                                    <td class="text-center">{{ $data->stok_akhir_rekap }}</td>
                                    <td class="text-center">{{ $data->kode_status_rekap == 'OUB' ? 'Outbond' : 'Inbound'}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ url('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ url('/js/sb-admin-2.min.js"') }}"></script>
</body>
</html>
