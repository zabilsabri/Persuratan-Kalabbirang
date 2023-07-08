<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class antarKeluar extends Model
{
    use HasFactory;

    protected $table = 'surat_antars_keluar';

    public function suratKeluar() {
        return $this->belongsTo('App\Models\suratKeluar', 'suratKeluar_id', 'id');
    }

}
