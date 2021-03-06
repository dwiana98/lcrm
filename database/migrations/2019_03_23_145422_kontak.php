<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Kontak extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kontak', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('foto',255);
            $table->string('nama_kontak', 100);
            $table->string('hp', 100);
            $table->string('email', 150);
            $table->string('keterangan', 100);
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
        Schema::dropIfExists('kontak');
    }
}
