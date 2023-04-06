<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'role_id',
        'nama',
        'username',
        'nik',
        'nip',
        'status_nikah',
        'kewarganegaraan',
        'tanggal_lahir',
        'tempat_lahir',
        'jkl',
        'alamat',
        'pekerjaan',
        'nomor_kk',
        'nomor_kp',
        'nomor_telp',
        'profil',
        'ktp',
        'swafoto_ktp',
        'email',
        'status'
        // 'password',
    ];

    public function role()
    {
        return $this->hasOne(Role::class, 'id', 'role_id');
    }

    public function ttd()
    {
        return $this->hasOne(ttd::class, 'user_id', 'id');
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function suratKeluar(){
        return $this->hasMany(suratKeluar::class, 'user_id', 'id');
    }

    public function suratMasuk(){
        return $this->hasMany(suratMasuk::class, 'tujuan_surat_id', 'id');
    }

    public function disposisi(){
        return $this->hasMany(disposisi::class, 'suratKeluar_id', 'id');
    }

    // public function suratKeluarDisposisi(){
    //     return $this->belongsToMany(suratKeluar::class, 'disposisis', 'suratKeluar_id');
    // }
}
