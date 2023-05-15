<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class antarMasuk extends Model
{
    use HasFactory;

    protected $table = 'surat_antars_masuk';

    public function suratMasuk() {
        return $this->belongsTo('App\Models\suratMasuk', 'surat_id', 'id');
    }
}
