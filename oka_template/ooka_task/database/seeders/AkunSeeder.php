<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Akun Default untuk admin, lurah, dan kasi
        $akuns = [
            ['id' => 1, 'role_id' => '1', 'nama' => 'Admin', 'username' => 'admin', 'nik' => '1', 'ttl' => Carbon::now(), 'nomor_kk' => '1', 'nomor_telp' => '1', 'email' => 'admin@gmail.com'],
            ['id' => 2, 'role_id' => '2', 'nama' => 'Lurah', 'username' => 'Lurah', 'nik' => '2', 'ttl' => Carbon::now(), 'nomor_kk' => '2', 'nomor_telp' => '2', 'email' => 'lurah@gmail.com'],
            ['id' => 3, 'role_id' => '3', 'nama' => 'Kasi', 'username' => 'Kasi', 'nik' => '3', 'ttl' => Carbon::now(), 'nomor_kk' => '3', 'nomor_telp' => '3', 'email' => 'kasi@gmail.com'],
        ];

        foreach ($akuns as $akun) {
            User::create([
                'id'            => $akun['id'],
                'role_id'       => $akun['role_id'],
                'nama'          => $akun['nama'],
                'username'      => $akun['username'],
                'nik'           => $akun['nik'],
                'ttl'           => $akun['ttl'],
                'nomor_kk'      => $akun['nomor_kk'],
                'nomor_telp'    => $akun['nomor_telp'],
                'email'         => $akun['email'],
            ]);
        };
    }
}
