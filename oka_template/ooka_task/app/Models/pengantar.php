<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengantar extends Model
{
    use HasFactory;

    public function suratKeluar(){
        return $this->belongsTo(suratKeluar::class, 'suratKeluar_id', 'id');
    }
}
