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
        Schema::create('tusulan_perbaikans', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->BigInteger('kode_tindakan')->unsigned();
            $table->foreign('kode_tindakan')->references('id')->on('tindakans')->ondelete('cascade');
            $table->BigInteger('kode_aset')->unsigned();
            $table->foreign('kode_aset')->references('id')->on('dt_peralatans')->ondelete('cascade');
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
        Schema::dropIfExists('tusulan_perbaikans');
    }
};
