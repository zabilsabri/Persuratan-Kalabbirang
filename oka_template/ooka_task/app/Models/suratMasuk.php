<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suratMasuk extends Model
{
    use HasFactory;
    protected $fillable = [
        'asal_surat',
        'no_surat',
        'tujuan_surat',
        'status',
        'file_surat'
    ];

    public function arsipMasuk() {
        return $this->hasOne('App\Models\arsipMasuk', 'suratMasuk_id', 'id');
    }

    public function antar() {
        return $this->hasOne('App\Models\antarMasuk', 'surat_id', 'id');
    }

    public function user() {
        return $this->belongsTo('App\Models\User', 'tujuan_surat_id', 'id');
    }

    public function userAcc() {
        return $this->belongsTo('App\Models\User', 'acc_id', 'id');
    }
}
