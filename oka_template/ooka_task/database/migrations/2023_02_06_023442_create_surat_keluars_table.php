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
            $table->string('pj'); // penanggung jawab
            $table->enum('status', ['Rahasia', 'Penting', 'Segera', 'Biasa']);
            $table->string('nama');
            $table->string('ttl');
            $table->string('pekerjaan');
            $table->string('alamat');
            $table->string('nik')->nullable();
            $table->enum('agama', ['islam', 'kristen', 'hindu', 'buddha', 'katolik']);
            $table->enum('jkl', ['L', 'P']);

            // field surat ahli waris
            $table->string('nm_ahliWaris1')->nullable();
            $table->string('ttl_ahliWaris1')->nullable();
            $table->string('status_ahliWaris1')->nullable();
            $table->string('nm_ahliWaris2')->nullable();
            $table->string('ttl_ahliWaris2')->nullable();
            $table->string('status_ahliWaris2')->nullable();

            // field surat ket. tidak mampu
            $table->integer('jml_tanggungan')->nullable();
            $table->string('jml_penghasilan')->nullable();
            $table->string('nm_anak')->nullable();
            $table->string('ttl_anak')->nullable();
            $table->string('pekerjaan_anak')->nullable();
            $table->string('nm_SekolahAnak')->nullable();
            $table->string('nis_anak')->nullable();
            $table->string('alamat_anak')->nullable();
            
            // field surat ket. usaha
            $table->string('status_nikah')->nullable();
            $table->string('bidang_usaha')->nullable();
            $table->string('bentuk_usaha')->nullable();
            $table->string('alamat_usaha')->nullable();
            $table->string('durasi_usaha')->nullable();


            $table->timestamps();
            
            $table->foreign('jenis_suratKeluar_id')->references('id')->on('jenis_surats');

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
