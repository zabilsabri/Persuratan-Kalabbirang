<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class pegawai extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nomor_kartu',
        'nip',
        'jabatan',
        'email',
        'nomor_telp',
        'alamat',
        'password',
        'profil', // foto profil
        'ttd', // foto ttd
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
