<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Vixik',
            'email' => 'vixik@example.com',
        ]);

        User::factory()->create([
            'name' => 'shadowfake',
            'email' => 'shadowfake@example.com',
        ]);
    }
}
