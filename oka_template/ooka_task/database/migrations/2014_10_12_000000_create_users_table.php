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
            $table->unsignedBigInteger('role_id')->default(6);
            $table->string('username');
            $table->string('nik')->unique()->nullable();
            $table->string('nip')->unique()->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->string('status_nikah')->nullable();
            $table->string('kewarganegaraan')->nullable();
            $table->enum('agama', ['Islam', 'Kristen', 'Hindu', 'Buddha', 'Katolik'])->nullable();
            $table->enum('jkl', ['Laki - Laki', 'Perempuan'])->nullable();            
            $table->string('alamat')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('nomor_kk')->nullable(); // Nomor Kartu Keluarga
            $table->string('nomor_kp')->nullable(); // Nomor Kartu Pegawai
            $table->string('nomor_telp');
            $table->string('email')->unique();  
            $table->timestamp('email_verified_at')->nullable();
            // $table->string('password');
            $table->string('profil')->nullable(); // foto profil
            $table->string('ktp')->nullable(); // foto ktp
            $table->string('swafoto_ktp')->nullable(); // swafoto ktp
            $table->boolean('verif_user')->default(0)->nullable();
            $table->enum('status', [1,0])->default(0);
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('role_id')->references('id')->on('roles');
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
