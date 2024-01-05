<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Performance>
 */
class PerformanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'player_id' => $this->faker->numberBetween(1, 3000),
            'user_id' => $this->faker->numberBetween(2, 4),
            'competition' => $this->faker->word,
            'season' => $this->faker->word,
            'score_points' => $this->faker->numberBetween(0, 40),
            'field_goal_percentage' => $this->faker->numberBetween(0, 100),
            'free_throw_percentage' => $this->faker->numberBetween(0, 100),
            'three_point_percentage' => $this->faker->numberBetween(0, 100),
            'assists_per_game' => $this->faker->numberBetween(0, 10),
            'turnovers_per_game' => $this->faker->numberBetween(0, 10),
            'assists_to_turnovers_ratio' => $this->faker->numberBetween(0, 10),
            'total_rebounds_per_game' => $this->faker->numberBetween(0, 10),
            'offensive_rebounds_per_game' => $this->faker->numberBetween(0, 10),
            'defensive_rebounds_per_game' => $this->faker->numberBetween(0, 10),
            'steals_per_game' => $this->faker->numberBetween(0, 10),
            'blocks_per_game' => $this->faker->numberBetween(0, 10),
            'defensive_efficiency_rating' => $this->faker->numberBetween(0, 10),
            'offensive_efficiency_rating' => $this->faker->numberBetween(0, 10),
            'jump_height' => $this->faker->numberBetween(0, 10),
            'speed' => $this->faker->numberBetween(0, 10),
            'minutes_played' => $this->faker->numberBetween(0, 10),
            'notes' => $this->faker->text,
            'created_at' => $this->faker->dateTimeBetween('2024-01-01', '2024-12-31'),
        ];
    }
}
