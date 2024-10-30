<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dt_peralatans', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('qr_code')->unsigned();
            $table->foreign('qr_code')->references('id')->on('peralatans')->ondelete('cascade');
            $table->string('barcode');
            $table->BigInteger('kode_ruang')->unsigned();
            $table->foreign('kode_ruang')->references('id')->on('ruang_labs')->ondelete('cascade');
            $table->BigInteger('kode_status_kondisi')->unsigned();
            $table->foreign('kode_status_kondisi')->references('id')->on('status_kondisis')->ondelete('cascade');
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
        Schema::dropIfExists('dt_peralatans');
    }
};
