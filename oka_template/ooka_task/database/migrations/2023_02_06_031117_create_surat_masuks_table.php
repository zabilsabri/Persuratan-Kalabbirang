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
        Schema::create('surat_masuks', function (Blueprint $table) {
            $table->id();
            $table->string('asal_surat');
            $table->string('judul_surat');
            $table->string('no_surat');
            $table->string('perihal');
            $table->date('tgl_surat');
            $table->unsignedBigInteger('tujuan_surat_id')->nullable();
            $table->string('jenis_surat');
            $table->string('catatan', 1000);
            $table->string('tujuan_surat');
            $table->string('jenis_surat');
            $table->enum('status', ['Rahasia', 'Penting', 'Segera', 'Biasa']);
            $table->string('file_surat');
            $table->timestamps();

            $table->foreign('tujuan_surat_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surat_masuks');
    }
};
