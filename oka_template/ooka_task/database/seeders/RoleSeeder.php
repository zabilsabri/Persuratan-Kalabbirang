<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   

        $role = [
            ['id' => 1, 'nama' => 'Admin'],
            ['id' => 2, 'nama' => 'Lurah'],
            ['id' => 3, 'nama' => 'Kasi Seksi Pemerintah, Ketertiban dan Ketentraman'],
            ['id' => 4, 'nama' => 'Kasi Seksi Pembangunan'],
            ['id' => 5, 'nama' => 'Kasi Seksi Ekonomi dan Kesejahteraan Rakyat'],
            ['id' => 6, 'nama' => 'Warga'],
        ];

        foreach ($role as $key => $v) {
            Role::create([
                'id' => $v['id'],
                'nama' => $v['nama'],
            ]);
        };
    }
}
