<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjualan;
use App\Models\Tiket;

class PenjualanController extends Controller
{
    public function index()
    {
        $penjualans = Penjualan::with('tiket')->get();
        return view('penjualans.index', compact('penjualans'));
    }
    

    public function create()
    {
        $tikets = Tiket::all();
        return view('penjualans.create', compact('tikets'));
    }

    public function store(Request $request)
    {
    $request->validate([
        'tiket_id' => 'required',
        'jumlah' => 'required',
        'total_harga' => 'required',
        'bukti_penjualan' => 'nullable|file|mimes:jpeg,png,pdf|max:2048',
    ]);

    $buktiPenjualanPath = $request->file('bukti_penjualan') ? $request->file('bukti_penjualan')->store('bukti_penjualan', 'public') : null;

    Penjualan::create([
        'tiket_id' => $request->tiket_id,
        'jumlah' => $request->jumlah,
        'total_harga' => $request->total_harga,
        'bukti_penjualan' => $buktiPenjualanPath,
    ]);

    return redirect()->route('penjualans.index')->with('success', 'Penjualan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $penjualan = Penjualan::find($id);
        $tikets = Tiket::all();
        return view('penjualans.edit', compact('penjualan', 'tikets'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tiket_id' => 'required|exists:tikets,id',
            'jumlah' => 'required|integer|min:1',
            'total_harga' => 'required|numeric',
        ]);

        $penjualan = Penjualan::find($id);
        $penjualan->tiket_id = $request->tiket_id;
        $penjualan->jumlah = $request->jumlah;
        $penjualan->total_harga = $request->total_harga;
        $penjualan->save();

        return redirect()->route('penjualans.index');
    }

    public function destroy($id)
    {
        $penjualan = Penjualan::find($id);
        $penjualan->delete();
        return redirect()->route('penjualans.index');
    }
}

