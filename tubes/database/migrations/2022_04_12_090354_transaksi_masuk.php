<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TransaksiMasuk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_masuk', function (Blueprint $table){
            $table->increments('idReservasi');
            $table->unsignedBigInteger('resto_id');
    	    $table->foreign('resto_id')->references('id')->on('registrasi1');
            $table->integer('idCust');
            $table->timestamps();
            $table->date('date_reservasi');
            $table->time('time_reservasi');
            $table->integer('no_table');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi_masuk');
    }
}
