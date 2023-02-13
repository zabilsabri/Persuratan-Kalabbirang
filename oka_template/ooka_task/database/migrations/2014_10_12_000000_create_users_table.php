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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('username');
            $table->string('nik')->unique();
            $table->date('ttl')->nullable();
            $table->enum('jkl', ['laki-laki', 'perempuan'])->nullable();
            $table->string('alamat')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('nomor_kk')->nullable();
            $table->string('nomor_telp')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            // $table->string('password');
            $table->string('profil')->nullable(); // fotot profil
            $table->string('ktp')->nullable(); // foto kk
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
        Schema::dropIfExists('users');
    }
};
