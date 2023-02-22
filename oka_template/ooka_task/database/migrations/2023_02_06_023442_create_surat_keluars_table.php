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
        Schema::create('surat_keluars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jenis_suratKeluar_id');
            $table->string('no_surat');
            $table->string('tgl_surat');
            $table->string('kode_surat');
            $table->string('pj'); // penanggung jawab
            $table->string('status');
            $table->timestamps();
            
            $table->foreign('jenis_suratKeluar_id')->references('id')->on('jenis_surats');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surat_keluars');
    }
};
