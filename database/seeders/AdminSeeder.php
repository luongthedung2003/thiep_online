<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->updateOrInsert(
            ['email' => 'admin@bankdash.com'],
            [
                'name'       => 'Administrator',
                'email'      => 'admin@bankdash.com',
                'password'   => Hash::make('12345678'),
                'role'       => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}
