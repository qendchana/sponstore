<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert([
            'email' => 'admin@sponstore.com',
            'email_verified_at' => now(),
            'password' => bcrypt('admin123'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
