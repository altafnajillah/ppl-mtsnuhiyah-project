<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PendaftarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pendaftar')->insert([
            [
                'nik' => '7604010202020001',
                'tgl' => Carbon::create(2002, 2, 2),
                'telp' => '081234567890',
                'email' => 'firman@example.com',
                'jk' => 'L',
                'alamat' => 'Pambusuang',
                'kk' => null,
                'akta' => null,
                'skl' => null,
                'kis' => null,
            ],
            [
                'nik' => '7604010202020002',
                'tgl' => Carbon::create(2002, 2, 2),
                'telp' => '081234567891',
                'email' => 'hasnur@example.com',
                'jk' => 'P',
                'alamat' => 'Waikaya',
                'kk' => null,
                'akta' => null,
                'skl' => null,
                'kis' => null,
            ],
        ]);
    }
}
