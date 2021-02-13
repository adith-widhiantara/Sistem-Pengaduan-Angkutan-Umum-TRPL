<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengaduan1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaduan1', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul');
            $table->string('uraian');
            $table->string('nama');
            $table->string('nomor');
            $table->string('tempat');
            $table->string('foto');
            $table->string('status');
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
        Schema::dropIfExists('pengaduan1');
    }
}
