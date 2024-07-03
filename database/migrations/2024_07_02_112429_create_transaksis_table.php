<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bus_id')->constrained('buses')->onDelete('cascade');
            $table->foreignId('tiket_id')->constrained('tikets')->onDelete('cascade');
            $table->foreignId('penjualan_id')->constrained('penjualans')->onDelete('cascade');
            $table->string('nama_pembeli');
            $table->string('metode_pembayaran');
            $table->date('tanggal_transaksi');
            $table->decimal('total_transaksi', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
}
