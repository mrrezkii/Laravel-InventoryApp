<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekap', function (Blueprint $table) {
            $table->id('id_rekap');
            $table->string('kode_barang');
            $table->foreign('kode_barang')->references('kode_barang')->on('barang');
            $table->date('tanggal_rekap');
            $table->integer('stok_awal_rekap');
            $table->integer('stok_akhir_rekap');
            $table->string('kode_status_rekap');
            $table->foreign('kode_status_rekap')->references('kode_status_rekap')->on('status_rekap');
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
        Schema::dropIfExists('rekap');
    }
}
