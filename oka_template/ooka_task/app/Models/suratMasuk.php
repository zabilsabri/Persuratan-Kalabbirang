<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class suratMasuk extends Model
{
    use HasFactory;
    protected $fillable = [
        'asal_surat',
        'no_surat',
        'judul_surat',
        'perihal',
        // 'isAntar',
        'tujuan_surat_id',
        'acc_id',
        'process',
        'jenis_surat',
        'status',
        'tgl_surat',
        'catatan',
        'file_surat'
    ];

    public function arsipMasuk() {
        return $this->hasOne('App\Models\arsipMasuk', 'suratMasuk_id', 'id');
    }

    public function antar() {
        return $this->hasOne('App\Models\antarMasuk', 'suratMasuk_id', 'id');
    }

    public function user() {
        return $this->belongsTo('App\Models\User', 'tujuan_surat_id', 'id');
    }

    public function userTrack() {
        return $this->belongsTo('App\Models\User', 'tujuan_surat_id', 'id');
    }

    public function userAcc() {
        return $this->belongsTo('App\Models\User', 'acc_id', 'id');
    }

    public function notifikasi() {
        return $this->hasOne('App\Models\notifikasiMasuk', 'suratMasuk_id', 'id');
    }

    public function getCreatedAtAttribute($value){
        return Carbon::parse($value)->format('d/m/Y');
    }

    public function getTglSuratAttribute($value){
        return Carbon::parse($value)->format('d/m/Y');
    }
}
