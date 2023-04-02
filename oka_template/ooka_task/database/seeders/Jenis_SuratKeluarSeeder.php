<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\jenisSurat;


class Jenis_SuratKeluarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = [
            ['id' => 1, 'nama' => 'Surat Keterangan Belum Menikah'],
            ['id' => 2, 'nama' => 'Surat Keterangan Tidak Mampu'],
            ['id' => 3, 'nama' => 'Surat Keterangan Usaha'],
            ['id' => 4, 'nama' => 'Surat Pengantar Keterangan Menikah'],
        ];

        foreach ($role as $key => $v) {
            jenisSurat::create([
                'id' => $v['id'],
                'nama' => $v['nama'],
            ]);
        };
    }
}
