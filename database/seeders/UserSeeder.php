<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => null,
                'password' => Hash::make('12345678'),
                'role_id' => 1,
                'remember_token' => 'ILbB4cjrwk2ZFGlG4N4HcslEEpvYNhte3cyyxgQ6sPoSx15U4LPfI9o27UgN',
                'created_at' => '2024-09-06 08:41:03',
                'updated_at' => '2024-09-07 02:04:59',
            ],
            [
                'id' => 2,
                'name' => 'editor',
                'email' => 'editor@gmail.com',
                'email_verified_at' => null,
                'password' => Hash::make('12345678'),
                'role_id' => 2,
                'remember_token' => null,
                'created_at' => '2024-09-06 08:17:25',
                'updated_at' => '2024-09-06 08:17:42',
            ],
            [
                'id' => 3,
                'name' => 'loli',
                'email' => 'loli@gmail.com',
                'email_verified_at' => null,
                'password' => Hash::make('12345678'),
                'role_id' => 3,
                'remember_token' => null,
                'created_at' => '2024-09-06 08:41:59',
                'updated_at' => '2024-09-06 08:41:59',
            ],
        ]);
    }
}
