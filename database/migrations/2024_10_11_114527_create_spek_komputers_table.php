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
        Schema::create('spek_komputers', function (Blueprint $table) {
            $table->id();
            $table->string('processor');
            $table->string('ram');
            $table->string('hardisk');
            $table->string('vga');
            $table->string('sound');
            $table->string('network1');
            $table->string('network2');
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
        Schema::dropIfExists('spek_komputers');
    }
};
