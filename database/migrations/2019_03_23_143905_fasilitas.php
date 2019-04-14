<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Fasilitas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fasilitas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_fasilitas', 30);
            $table->string('jumlah', 10);
            $table->string('keterangan', 30);
            $table->timestampsTz();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fasilitas');
    }
}
