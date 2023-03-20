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
            $table->unsignedBigInteger('role_id');
            $table->string('nama');
            $table->string('username');
            $table->string('nik')->unique();
            $table->date('ttl')->nullable()->format('d-m-Y');
            $table->enum('jkl', ['laki-laki', 'perempuan'])->nullable();
            $table->string('alamat')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('nomor_kk');
            $table->string('nomor_telp');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            // $table->string('password');
            $table->string('profil')->nullable(); // foto profil
            $table->string('ktp')->nullable(); // foto ktp
            $table->string('swafoto_ktp')->nullable(); // swafoto ktp
            $table->boolean('verif_user')->default(0);
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
