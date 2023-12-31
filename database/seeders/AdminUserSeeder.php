<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory()->count(1)->create([
            'es_admin' => true,
            'email' => 'admin@admin',
            'password' => bcrypt('admin'),
            'name' => 'Admin',
        ]);
    }
}
