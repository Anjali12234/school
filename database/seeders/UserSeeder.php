<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {

        if (!User::where('email', 'admin@admin.com')->exists()) {
            User::create([
                'email' => 'admin@admin.com',
                'password' => bcrypt('password'),
                'name' => 'superadmin'
            ]);
        }
    }
}
