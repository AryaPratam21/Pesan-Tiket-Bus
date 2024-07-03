<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'bus_id',
        'tiket_id',
        'penjualan_id',
        'nama_pembeli',
        'metode_pembayaran',
        'tanggal_transaksi',
        'total_transaksi',
    ];

    /**
     * Get the bus that owns the transaction.
     */
    public function bus()
    {
        return $this->belongsTo(Bus::class);
    }

    /**
     * Get the ticket associated with the transaction.
     */
    public function tiket()
    {
        return $this->belongsTo(Tiket::class);
    }

    /**
     * Get the sales associated with the transaction.
     */
    public function penjualan()
    {
        return $this->belongsTo(Penjualan::class);
    }
}
