<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suratMasuk extends Model
{
    use HasFactory;
    protected $fillable = [
        // 'tgl_terima',
        'asal_surat',
        'no_surat',
        'tujuan_surat',
        'status',
        'file_surat'
    ];

    public function arsipMasuk() {
        return $this->hasOne('App\Models\arsipMasuk', 'suratMasuk_id', 'id');
    }
}
