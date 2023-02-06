<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenisSurat extends Model
{
    use HasFactory;
    protected $fillable = [
        'jenis'
    ];

    public function surat() {
        return $this->hasMany('App\Models\suratKeluar', 'jenis_suratKeluar_id', 'id');
    }
}
