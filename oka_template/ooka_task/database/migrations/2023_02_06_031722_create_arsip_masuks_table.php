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
        Schema::create('arsip_masuks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('suratMasuk_id');
            $table->string('file_surat');
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
        Schema::dropIfExists('arsip_masuks');
    }
};
