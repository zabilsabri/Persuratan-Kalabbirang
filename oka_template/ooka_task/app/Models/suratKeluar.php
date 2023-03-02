<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suratKeluar extends Model
{
    use HasFactory;

    protected $fillable = [
        // yang selalu diisi disetiap jenis surat
        'jenis_suratKeluar_id',
        'no_surat',
        'tgl_surat',
        'kode_surat',
        'pj', // penanggung jawab
        'status',

        // berbeda bersadarkan jenis surat nya
        'nama',
        'jkl',
        'alamat',
        'ttl',
        'nik',
        'agama',
        'pekerjaan',
        'nm_ahliWaris1',
        'ttl_ahliWaris1',
        'status_ahliWaris1',
        'nm_ahliWaris2',
        'ttl_ahliWaris2',
        'status_ahliWaris2',
        'jumlah_tanggungan',
        'jumlah_penghasilan',
        'nama_anak',
        'ttl_anak',
        'pekerjaan_anak',
        'sekolah_anak', // nama sekolah
        'nis_anak',
        'alamat_anak',
        'status_nikah',
        'bidang_usaha',
        'bentuk_usaha',
        'alamat_usaha',
        'durasi_usaha',
        'info_kawin', // informasi kawin sebelum nya
        'atribut_nama',
    ];

    public function arsipKeluar () {
        return $this->hasOne('App\Models\arsipKeluar', 'suratKeluar_id', 'id');
    }

    public function jenisSurat() {
        return $this->hasOne('App\Models\jenisSurat', 'id', 'jenis_suratKeluar_id');
    }
}

