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
        Schema::create('disposisis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('userk_id'); // id User Yang Mengirim
            $table->unsignedBigInteger('usert_id'); // id User Yang Menerima
            $table->unsignedBigInteger('suratKeluar_id');
            $table->date('tgl_disposisi');
            $table->string('catatan');
            $table->string('instruksi');
            $table->timestamps();

            $table->foreign('userk_id')->references('id')->on('users');
            $table->foreign('usert_id')->references('id')->on('users');
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
        Schema::dropIfExists('disposisis');
    }
};
