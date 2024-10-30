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
        Schema::create('peralatans', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('jenis_peralatan')->unsigned();
            $table->foreign('jenis_peralatan')->references('id')->on('jenis_peralatans')->ondelete('cascade');
            $table->string('nama_peralatan');
            $table->string('kategori');
            $table->string('spek');
            $table->BigInteger('kode_spek')->unsigned();
            $table->foreign('kode_spek')->references('id')->on('spek_komputers')->ondelete('cascade');
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
        Schema::dropIfExists('peralatans');
    }
};
