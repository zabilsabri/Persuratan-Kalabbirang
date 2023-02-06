<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suratKeluar extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis_suratKeluar_id',
        'no_surat',
        'tgl_surat',
        'kode_surat',
        'pj', // penanggung jawab
        'status'
    ];

    public function arsipKeluar () {
        return $this->hasOne('App\Models\arsipKeluar', 'suratKeluar_id', 'id');
    }
}

