<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Player;
use App\Models\Suggestion;
use App\Models\Position;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create([
            'username' => 'admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('admin1234'),
            'role' => 'admin',
            'email_verified_at' => now(),
        ]);

        Position::create(['name' => 'Defensa']);
        Position::create(['name' => 'Portero']);
        Position::create(['name' => 'Medio']);
        Position::create(['name' => 'Delantero']);
        
        Player::factory(10)->create();

        Suggestion::factory(10)->create();

    }
}
