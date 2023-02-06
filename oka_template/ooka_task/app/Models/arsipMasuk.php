<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class arsipMasuk extends Model
{
    use HasFactory;
    protected $fillabel = [
        'suratMasuk_id',
        'file_surat',
    ];


    public function suratMasuk() {
        return $this->hasMany('App\Models\suratMasuk', 'id', 'suratMasuk_id');
    }
}
