@extends('layouts.app')

@section('title', 'Edit Transaksi')

@section('content')
    <h1>Edit Transaksi</h1>
    <form action="{{ route('transaksis.update', $transaksi->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="bus_id">Bus</label>
            <select name="bus_id" class="form-control">
                @foreach ($buses as $bus)
                    <option value="{{ $bus->id }}" {{ $transaksi->bus_id == $bus->id ? 'selected' : '' }}>{{ $bus->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="tiket_id">Tiket</label>
            <select name="tiket_id" class="form-control">
                @foreach ($tikets as $tiket)
                    <option value="{{ $tiket->id }}" {{ $transaksi->tiket_id == $tiket->id ? 'selected' : '' }}>{{ $tiket->rute }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="penjualan_id">Penjualan</label>
            <select name="penjualan_id" class="form-control">
                @foreach ($penjualans as $penjualan)
                    <option value="{{ $penjualan->id }}" {{ $transaksi->penjualan_id == $penjualan->id ? 'selected' : '' }}>{{ $penjualan->jumlah }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="nama_pembeli">Nama Pembeli</label>
            <input type="text" name="nama_pembeli" class="form-control" value="{{ $transaksi->nama_pembeli }}">
        </div>
        <div class="form-group">
            <label for="metode_pembayaran">Metode Pembayaran</label>
            <input type="text" name="metode_pembayaran" class="form-control" value="{{ $transaksi->metode_pembayaran }}">
        </div>
        <div class="form-group">
            <label for="tanggal_transaksi">Tanggal Transaksi</label>
            <input type="date" name="tanggal_transaksi" class="form-control" value="{{ $transaksi->tanggal_transaksi }}">
        </div>
        <div class="form-group">
            <label for="total_transaksi">Total Transaksi</label>
            <input type="text" name="total_transaksi" class="form-control" value="{{ $transaksi->total_transaksi }}">
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
    <a href="{{ route('transaksis.index') }}" class="btn btn-secondary mt-3">Kembali</a>
@endsection
