<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ttd extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function suratKeluar(){
        return $this->hasMany(suratKeluar::class, 'ttd_id', 'id');
    }
}
