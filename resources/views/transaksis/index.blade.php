@extends('layouts.dashboard')

@section('title', 'Daftar Transaksi')

@section('content')
    <div class="container">
        <h1>Daftar Transaksi</h1>
        <a href="{{ route('transaksis.create') }}" class="btn btn-primary mb-3">Tambah Transaksi</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Pembeli</th>
                    <th>Total Transaksi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transaksis as $transaksi)
                    <tr>
                        <td>{{ $transaksi->id }}</td>
                        <td>{{ $transaksi->nama_pembeli }}</td>
                        <td>{{ $transaksi->total_transaksi }}</td>
                        <td>
                            <a href="{{ route('transaksis.show', $transaksi->id) }}" class="btn btn-info">Detail</a>
                            <a href="{{ route('transaksis.edit', $transaksi->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('transaksis.destroy', $transaksi->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
