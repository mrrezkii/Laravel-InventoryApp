<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
<div>
    <table width="100%">
        <thead>
        <tr>
            <th>No.</th>
            <th>Kode Barang</th>
            <th>Tanggal Rekap</th>
            <th>Stok Awal</th>
            <th>Stok Akhir</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
        @foreach($dataBarang as $data)
            <tr>
                <th style="font-weight: normal">{{ (int) $loop->index + 1 }}</th>
                <th style="font-weight: normal">{{ $data->kode_barang }}</th>
                <th style="font-weight: normal">{{ $data->tanggal_rekap}}</th>
                <th style="font-weight: normal">{{ $data->stok_awal_rekap }}</th>
                <th style="font-weight: normal">{{ $data->stok_akhir_rekap }}</th>
                <th style="font-weight: normal">{{ $data->kode_status_rekap == 'OUB' ? 'Outbond' : 'Inbound'}}</th>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
