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
        'user_id',
        'pj_id',
        'ttd_id',
        'no_surat',
        'tgl_surat',
        'kode_surat',
        'catatan',
        'instruksi',
        'process',
        'status', // enum('Rahasia', 'Penting', 'Segera', 'Biasa'))
        'pengirim',

        // berbeda bersadarkan jenis surat nya
        // field surat ahli waris
        // 'nama',
        // 'jkl',
        // 'alamat',
        // 'nik',
        // 'agama',
        // 'pekerjaan',
        // 'nm_ahliWaris1',
        // 'ttl_ahliWaris1',
        // 'status_ahliWaris1',
        // 'nm_ahliWaris2',
        // 'ttl_ahliWaris2',
        // 'status_ahliWaris2',

        // field surat tidak mampu
        'jml_tanggungan',
        'jml_penghasilan',
        'nama_anak',
        'tempat_lahir_anak',
        'tanggal_lahir_anak',
        'pekerjaan_anak',
        'nama_SekolahAnak',
        'nis_kelas_anak',
        'alamat_anak',

        // field surat usaha
        'bidang_usaha',
        'bentuk_usaha',
        'alamat_usaha',
        'durasi_usaha',
        
        // field surat ket. menikah
        'nama_istri_suami_terdahulu',
        // Bio ayah
        'nama_ayah', 
        'nik_ayah',
        'tempat_lahir_ayah',
        'tanggal_lahir_ayah',
        'kewarganegaraan_ayah',
        'agama_ayah',
        'pekerjaan_ayah',
        'alamat_ayah',
        
        // Bio Ibu
        'nama_ibu', 
        'nik_ibu',
        'tempat_lahir_ibu',
        'tanggal_lahir_ibu',
        'kewarganegaraan_ibu',
        'agama_ibu',
        'pekerjaan_ibu',
        'alamat_ibu',

        
    ];

    public function arsipKeluar () {
        return $this->hasOne('App\Models\arsipKeluar', 'suratKeluar_id', 'id');
    }

    public function antar() {
        return $this->hasOne('App\Models\antarKeluar', 'surat_id', 'id');
    }

    public function jenisSurat() {
        return $this->hasOne('App\Models\jenisSurat', 'id', 'jenis_suratKeluar_id');
    }

    public function pengantar(){
        return $this->hasMany(pengantar::class, 'suratKeluar_id', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function pj(){
        return $this->belongsTo(User::class, 'pj_id', 'id');
    }

    public function ttd(){
        return $this->belongsTo(ttd::class, 'ttd_id', 'id');
    }

    public function disposisi(){
        return $this->hasMany(disposisi::class, 'suratKeluar_id', 'id');
    }

    // public function userK(){
    //     return $this->belongsToMany(User::class, 'disposisis', 'userk_id');
    // }

    // public function userT(){
    //     return $this->belongsToMany(User::class, 'disposisis', 'usert_id');
    // }
}

