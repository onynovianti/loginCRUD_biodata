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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('deskripsi_singkat');
            $table->string('nama');
            $table->string('ttl');
            $table->string('alamat');
            $table->string('tahun_sd');
            $table->string('tahun_smp');
            $table->string('tahun_smk');
            $table->string('nama_sd');
            $table->string('nama_smp');
            $table->string('nama_smk');
            $table->string('email');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('nomor_hp');
            $table->integer('domisili');
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
        Schema::dropIfExists('abouts');
    }
};
