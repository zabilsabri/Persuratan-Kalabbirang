<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notifikasi extends Model
{
    use HasFactory;

    protected $table = 'notifikasi_keluars';

    public function suratKeluar() {
        return $this->belongsTo('App\Models\suratKeluar', 'suratKeluar_id', 'id');
    }

}
