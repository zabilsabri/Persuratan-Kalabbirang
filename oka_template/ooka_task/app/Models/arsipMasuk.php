<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class arsipMasuk extends Model
{
    use HasFactory;
    protected $fillable = [
        'suratMasuk_id',
        // 'file_surat',
    ];


    public function suratMasuk() {
        return $this->belongsTo('App\Models\suratMasuk', 'suratMasuk_id', 'id');
    }
}
