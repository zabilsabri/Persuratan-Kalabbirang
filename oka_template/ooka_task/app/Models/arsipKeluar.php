<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class arsipKeluar extends Model
{
    use HasFactory;
    protected $fillable = [
        'suratKeluar_id',
        // 'file_surat'
    ];

    public function suratKeluar() {
        return $this->belongsTo('App\Models\suratKeluar', 'suratKeluar_id', 'id');
    }
}


