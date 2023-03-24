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
        Schema::create('pengantars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('suratKeluar_id');
            $table->unsignedBigInteger('user_id');
            $table->string('nama_file_surat');
            $table->string('file_surat');
            $table->foreign('suratKeluar_id')->references('id')->on('surat_keluars');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengantars');
    }
};
