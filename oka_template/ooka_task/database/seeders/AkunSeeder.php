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
            ['id' => 1, 'role_id' => '1', 'nama' => 'Admin', 'username' => 'admin', 'nik' => '1', 'nip' => '1', 'nkp' => '1', 'alamat' => '1', 'nomor_kk' => '1', 'nomor_telp' => '1', 'email' => 'admin@gmail.com'],
            ['id' => 2, 'role_id' => '2', 'nama' => 'Lurah', 'username' => 'Lurah', 'nik' => '2', 'nip' => '2', 'nkp' => '2', 'alamat' => '2', 'nomor_kk' => '2', 'nomor_telp' => '2', 'email' => 'lurah@gmail.com'],
            ['id' => 3, 'role_id' => '3', 'nama' => 'Kasi', 'username' => 'Kasi', 'nik' => '3', 'nip' => '3', 'nkp' => '3', 'alamat' => '3', 'nomor_kk' => '3', 'nomor_telp' => '3', 'email' => 'kasipkk@gmail.com'],
            ['id' => 4, 'role_id' => '4', 'nama' => 'Kasi', 'username' => 'Kasi', 'nik' => '4', 'nip' => '4', 'nkp' => '4', 'alamat' => '4', 'nomor_kk' => '4', 'nomor_telp' => '4', 'email' => 'kasipembangunan@gmail.com'],
            ['id' => 5, 'role_id' => '5', 'nama' => 'Kasi', 'username' => 'Kasi', 'nik' => '5', 'nip' => '5', 'nkp' => '5', 'alamat' => '5', 'nomor_kk' => '5', 'nomor_telp' => '5', 'email' => 'kasiEKR@gmail.com'],
            ['id' => 6, 'role_id' => '6', 'nama' => 'Dummy User', 'username' => 'Dummy User', 'nik' => '6', 'nkp' => '6', 'nip' => '6', 'alamat' => '6', 'nomor_kk' => '6', 'nomor_telp' => '6', 'email' => 'DummyUser@gmail.com'],

        ];

        foreach ($akuns as $akun) {
            User::create([
                'id'            => $akun['id'],
                'role_id'       => $akun['role_id'],
                'nama'          => $akun['nama'],
                'username'      => $akun['username'],
                'nik'           => $akun['nik'],
                'nomor_kk'      => $akun['nomor_kk'],
                'nip'           => $akun['nip'],
                'nomor_kp'      => $akun['nkp'],
                'alamat'        => $akun['alamat'],
                'nomor_telp'    => $akun['nomor_telp'],
                'email'         => $akun['email'],
            ]);
        };
    }
}
