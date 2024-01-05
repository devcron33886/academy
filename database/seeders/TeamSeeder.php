<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teams = [
            [
                'user_id' => 2,
                'name' => 'Crusaders',
                'logo_path' => 'crusaders.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'name' => 'Kigali Titans',
                'logo_path' => 'titans.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 4,
                'name' => 'Shooting Stars',
                'logo_path' => 'shooting.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ];

        Team::insert($teams);
    }
}
