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
        \App\Models\User::updateOrCreate(
            ['email' => 'admin@blacksheepevents.ro'],
            [
                'name' => 'Admin Black Sheep',
                'password' => bcrypt('OaiaMircea26!'),
                'is_admin' => true,
            ]
        );
    }
}
