<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class disposisiMasuk extends Model
{
    use HasFactory;
    
    protected $table = 'disposisi_masuks';


    public function userK(){
        return $this->belongsTo(User::class, 'userk_id', 'id');
    }

    public function userT(){
        return $this->belongsTo(User::class, 'usert_id', 'id');
    }

    public function suratMasuk(){
        return $this->belongsTo(suratMasuk::class, 'suratMasuk_id', 'id');
    }
}
