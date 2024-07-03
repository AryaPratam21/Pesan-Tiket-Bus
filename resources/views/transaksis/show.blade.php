@extends('layouts.app')

@section('title', 'Detail Transaksi')

@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Detail Transaksi</h1>
        </div>

        <!-- Content Row -->
        <div class="row">
            <!-- Details Card -->
            <div class="col-lg-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <!--<h6 class="m-0 font-weight-bold text-primary">Transaksi Information</h6>-->
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" width="100%" cellspacing="0">
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
                        </div>
                        <div class="mt-3">
                            <a href="{{ route('transaksis.index') }}" class="btn btn-secondary">Kembali</a>
                            <a href="{{ route('transaksis.cetak-pdf', $transaksi->id) }}" class="btn btn-primary">Cetak PDF</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
