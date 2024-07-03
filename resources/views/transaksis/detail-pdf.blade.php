<!DOCTYPE html>
<html>
<head>
    <title>Detail Transaksi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Detail Transaksi</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Bus</th>
                <th>Tiket</th>
                <th>Penjualan</th>
                <th>Nama Pembeli</th>
                <th>Metode Pembayaran</th>
                <th>Tanggal Transaksi</th>
                <th>Total Transaksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $transaksi->id }}</td>
                <td>{{ $transaksi->bus->nama }}</td>
                <td>{{ $transaksi->tiket->rute }}</td>
                <td>{{ $transaksi->penjualan->jumlah }}</td>
                <td>{{ $transaksi->nama_pembeli }}</td>
                <td>{{ $transaksi->metode_pembayaran }}</td>
                <td>{{ $transaksi->tanggal_transaksi }}</td>
                <td>{{ $transaksi->total_transaksi }}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
