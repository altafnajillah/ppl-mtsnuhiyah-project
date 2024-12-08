<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('siswa')->insert([
            [
                'nik' => '7604010202020001',
                'tgl' => Carbon::create(2002, 11, 22),
                'telp' => '081234567890',
                'jk' => 'L',
                'alamat' => 'Tinambung',
                'kk' => null,
                'akta' => null,
                'skl' => null,
                'kis' => null,
            ],
            [
                'nik' => '7604010202020002',
                'tgl' => Carbon::create(2002, 6, 7),
                'telp' => '081234567891',
                'jk' => 'P',
                'alamat' => 'Matakali',
                'kk' => null,
                'akta' => null,
                'skl' => null,
                'kis' => null,
            ],
        ]);
    }
}
