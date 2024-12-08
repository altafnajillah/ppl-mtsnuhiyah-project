<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('password'),
                'role' => '1',
                'status' => null,
            ],
            [
                'name' => 'Firmansyah Assagaf',
                'email' => 'firman@example.com',
                'password' => bcrypt('password'),
                'role' => '0',
                'status' => 'primary'
            ],
            [
                'name' => 'Hasnur',
                'email' => 'hasnur@example.com',
                'password' => bcrypt('password'),
                'role' => '0',
                'status' => 'primary'
            ],
        ]);
    }
}
