@extends('layouts.app')

@section('title', 'Tambah Transaksi')

@section('content')
    <h1>Tambah Transaksi</h1>
    <form action="{{ route('transaksis.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="bus_id">Bus</label>
            <select name="bus_id" class="form-control">
                @foreach ($buses as $bus)
                    <option value="{{ $bus->id }}">{{ $bus->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="tiket_id">Tiket</label>
            <select name="tiket_id" class="form-control">
                @foreach ($tikets as $tiket)
                    <option value="{{ $tiket->id }}">{{ $tiket->rute }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="penjualan_id">Penjualan</label>
            <select name="penjualan_id" class="form-control">
                @foreach ($penjualans as $penjualan)
                    <option value="{{ $penjualan->id }}">{{ $penjualan->jumlah }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="nama_pembeli">Nama Pembeli</label>
            <input type="text" name="nama_pembeli" class="form-control" value="{{ old('nama_pembeli') }}">
        </div>
        <div class="form-group">
            <label for="metode_pembayaran">Metode Pembayaran</label>
            <input type="text" name="metode_pembayaran" class="form-control" value="{{ old('metode_pembayaran') }}">
        </div>
        <div class="form-group">
            <label for="tanggal_transaksi">Tanggal Transaksi</label>
            <input type="date" name="tanggal_transaksi" class="form-control" value="{{ old('tanggal_transaksi') }}">
        </div>
        <div class="form-group">
            <label for="total_transaksi">Total Transaksi</label>
            <input type="text" name="total_transaksi" class="form-control" value="{{ old('total_transaksi') }}">
        </div>
        <button type="submit" class="btn btn-success">Tambah</button>
    </form>
    <a href="{{ route('transaksis.index') }}" class="btn btn-secondary mt-3">Kembali</a>
@endsection
