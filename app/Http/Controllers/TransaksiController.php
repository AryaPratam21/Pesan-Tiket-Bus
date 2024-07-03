<?php

namespace App\Http\Controllers;
use App\Models\Transaksi;
use App\Models\Bus;
use App\Models\Tiket;
use App\Models\Penjualan;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;

class TransaksiController extends Controller
{

    public function index()
    {
    $transaksis = Transaksi::all();
    return view('transaksis.index', compact('transaksis'));
    }
    



    public function create()
    {
        $buses = Bus::all();
        $tikets = Tiket::all();
        $penjualans = Penjualan::all();
        return view('transaksis.create', compact('buses', 'tikets', 'penjualans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'bus_id' => 'required|exists:buses,id',
            'tiket_id' => 'required|exists:tikets,id',
            'penjualan_id' => 'required|exists:penjualans,id',
            'nama_pembeli' => 'required|string|max:255',
            'metode_pembayaran' => 'required|string|max:255',
            'tanggal_transaksi' => 'required|date',
            'total_transaksi' => 'required|numeric',
        ]);

        Transaksi::create($request->all());
        return redirect()->route('transaksis.index')->with('success', 'Transaksi created successfully.');
    }

    public function show(Transaksi $transaksi)
    {
        return view('transaksis.show', compact('transaksi'));
    }

    public function edit(Transaksi $transaksi)
    {
        $buses = Bus::all();
        $tikets = Tiket::all();
        $penjualans = Penjualan::all();
        return view('transaksis.edit', compact('transaksi', 'buses', 'tikets', 'penjualans'));
    }


    public function update(Request $request, Transaksi $transaksi)
    {
        $request->validate([
            'bus_id' => 'required|exists:buses,id',
            'tiket_id' => 'required|exists:tikets,id',
            'penjualan_id' => 'required|exists:penjualans,id',
            'nama_pembeli' => 'required|string|max:255',
            'metode_pembayaran' => 'required|string|max:255',
            'tanggal_transaksi' => 'required|date',
            'total_transaksi' => 'required|numeric',
        ]);

        $transaksi->update($request->all());

        return redirect()->route('transaksis.index')->with('success', 'Transaksi updated successfully.');
    }

    public function destroy(Transaksi $transaksi)
    {
        $transaksi->delete();

        return redirect()->route('transaksis.index')->with('success', 'Transaksi deleted successfully.');
    }
}
