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
        Schema::create('arsip_keluars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('suratKeluar_id');
            // $table->string('file_surat')->nullable();
            $table->boolean('status'); // Karena surat yang diterima maupun ditolak akan di arsip, maka kolom ini untuk identifikasi apakah surat yang diarsip ini termasuk surat yang ditolak atau diterima
            $table->string('keterangan_status');
            $table->timestamps();

            $table->foreign('suratKeluar_id')->references('id')->on('surat_keluars');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('arsip_keluars');
    }
};
