<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrasi1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrasi1', function (Blueprint $table) {
            $table ->id();
	    $table->string('username');
    	    $table->foreign('username')->references('username')->on('akun');
            $table ->string('image');
            $table ->string('nama');
            $table ->string('alamat');
            $table ->string('kota');
            $table ->string('kecamatan');
            $table ->string('kodepos');
            $table ->string('kategori');
            //$table ->string('username');
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
        Schema::dropIfExists('registrasi1');
    }
}
