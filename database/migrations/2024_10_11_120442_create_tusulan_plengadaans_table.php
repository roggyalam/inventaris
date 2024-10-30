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
        Schema::create('tusulan_plengadaans', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->integer('kode_peralatan');
            $table->integer('qty');
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
        Schema::dropIfExists('tusulan_plengadaans');
    }
};
