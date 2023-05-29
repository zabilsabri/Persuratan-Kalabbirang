<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notifikasiMasuk extends Model
{
    use HasFactory;

    protected $table = 'notifikasi_masuks';

    public function suratMasuk() {
        return $this->belongsTo('App\Models\suratMasuk', 'suratMasuk_id', 'id');
    }

}
