<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class disposisi extends Model
{
    use HasFactory;

    protected $table = 'disposisis';

    public function userK(){
        return $this->belongsTo(User::class, 'userk_id', 'id');
    }

    public function userT(){
        return $this->belongsTo(User::class, 'usert_id', 'id');
    }

    public function suratKeluar(){
        return $this->belongsTo(suratKeluar::class, 'suratKeluar_id', 'id');
    }
}
