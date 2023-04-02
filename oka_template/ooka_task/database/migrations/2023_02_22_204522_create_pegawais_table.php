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
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nomor_kartu')->unique();
            $table->string('nip')->unique();
            $table->string('jabatan');
            $table->string('email')->unique();
            $table->string('nomor_telp');
            $table->string('alamat');
            $table->string('password');
            $table->string('profil')->nullable(); // foto profil
            $table->string('ttd'); // foto ttd
            $table->rememberToken();
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
        Schema::dropIfExists('pegawais');
    }
};
