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
        Schema::create('surat_antars_masuk', function (Blueprint $table) {
            $table->id();
            $table->string('penerima')->nullable();
            $table->string('instansi')->nullable();
            $table->string('alamat')->nullable();
            $table->unsignedBigInteger('suratMasuk_id');
            $table->date('tgl_pengajuan'); // Tgl Pengajuan Pengantaran. Ini tanggalnya diambil ketika Surat sudah Ditandatangani.
            $table->date('tgl_terima_kurir')->nullable();
            $table->date('tgl_selesai')->nullable();
            $table->enum('status', ['Waiting', 'On Progress', 'Finish/Done', 'Belum Terkirim'])->default('Belum Terkirim'); // Belum terkirim artinya alamat penerima belum di input oleh Admin
            $table->timestamps();

            $table->foreign('suratMasuk_id')->references('id')->on('surat_masuks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surat_antars_masuk');
    }
};
