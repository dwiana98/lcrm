<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pendaftaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftaran', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama', 30);
            $table->string('tempat', 30);
            $table->string('tgl_lahir', 10);
            $table->text('alamat');
            $table->string('gender', 10);
            $table->string('asal_sekolah', 30);
            $table->string('kelas', 20);
            $table->string('hobby', 20);
            $table->string('nama_ayah', 30);
            $table->string('nama_ibu', 30);
            $table->string('no_tlp', 20);
            $table->string('paket', 10);
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
        Schema::dropIfExists('pendaftaran');
    }
}
