<?php
//aliran sesat
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notifikasiMasuk extends Model
{
    use HasFactory;

    protected $table = 'notifikasi_masuks';
    protected $fillable = [
        'suratMasuk_id',
        'keterangan',
        'status',
    ];

    public function suratMasuk() {
        return $this->belongsTo('App\Models\suratMasuk', 'suratMasuk_id', 'id');
    }

}
