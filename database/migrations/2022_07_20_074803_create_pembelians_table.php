<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembeliansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->text('nama');
            $table->date('tgl_beli');
            $table->string('nama_barang');
            $table->integer('harga_satuan');
            $table->integer('jumlah_barang');
            $table->integer('total_harga');
            $table->timestamps();
        });
        // <th>No</th>
        // <th>Nama Pembeli</th>
        // <th>Tanggal Pembelian</th>
        // <th>Nama Barang</th>
        // <th>Harga Satuan</th>
        // <th>Jumlah Barang</th>
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembelians');
    }
}
