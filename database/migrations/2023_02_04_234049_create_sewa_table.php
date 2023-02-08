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
        Schema::create('sewa', function (Blueprint $table) {
            $table->id();
            $table->string('nama_dvd');
            $table->string('slug');
            $table->integer('harga_sewa');
            $table->text('gambar');
            $table->string('tahun');
            $table->string('genre');
            $table->string('durasi');
            $table->string('status');
            $table->text('deskripsi');
            $table->boolean('SU');
            $table->boolean('13+');
            $table->boolean('17+');
            $table->boolean('21+');
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
        Schema::dropIfExists('sewa');
    }
};
