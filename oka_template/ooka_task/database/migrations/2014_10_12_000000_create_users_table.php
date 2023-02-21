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
            $table->enum('jkl', ['laki-laki', 'perempuan']);
            $table->string('alamat')->nullable();;
            $table->string('role');
            $table->string('pekerjaan')->nullable();
            $table->string('nomor_kk');
            $table->string('nomor_telp');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('profil')->nullable(); // foto profil
            $table->string('ktp'); // foto kk
            $table->string('swafoto_ktp'); // foto kk
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
