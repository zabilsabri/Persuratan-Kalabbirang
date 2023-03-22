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
        Schema::create('surat_keluars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jenis_suratKeluar_id');
            $table->string('no_surat');
            $table->date('tgl_surat');
            $table->string('kode_surat');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('pj_id'); //Penanggung Jawab
            $table->enum('status', ['Rahasia', 'Penting', 'Segera', 'Biasa']);

            // field surat ket. tidak mampu
            $table->integer('jml_tanggungan')->nullable();
            $table->string('jml_penghasilan')->nullable();
            $table->string('nama_anak')->nullable();
            $table->string('tempat_lahir_anak')->nullable();
            $table->string('tanggal_lahir_anak')->nullable();
            $table->string('pekerjaan_anak')->nullable();
            $table->string('nama_SekolahAnak')->nullable();
            $table->string('nis_kelas_anak')->nullable();
            $table->string('alamat_anak')->nullable();
            
            // field surat ket. usaha
            $table->string('bidang_usaha')->nullable();
            $table->string('bentuk_usaha')->nullable();
            $table->string('alamat_usaha')->nullable();
            $table->string('durasi_usaha')->nullable();
            
            // field surat ket. menikah
            $table->string('nama_istri_suami_terdahulu')->nullable();
                //Biodata Ayah
            $table->string('nama_ayah')->nullable();
            $table->string('nik_ayah')->nullable();
            $table->string('tempat_lahir_ayah')->nullable();
            $table->string('tanggal_lahir_ayah')->nullable();
            $table->string('kewarganegaraan_ayah')->nullable();
            $table->string('agama_ayah')->nullable();
            $table->string('pekerjaan_ayah')->nullable();
            $table->string('alamat_ayah')->nullable();
                //Biodata Ayah
            $table->string('nama_ibu')->nullable();
            $table->string('nik_ibu')->nullable();
            $table->string('tempat_lahir_ibu')->nullable();
            $table->string('tanggal_lahir_ibu')->nullable();
            $table->string('kewarganegaraan_ibu')->nullable();
            $table->string('agama_ibu')->nullable();
            $table->string('pekerjaan_ibu')->nullable();
            $table->string('alamat_ibu')->nullable();


            

            $table->timestamps();
            
            $table->foreign('jenis_suratKeluar_id')->references('id')->on('jenis_surats');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('pj_id')->references('id')->on('roles');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surat_keluars');
    }
};
