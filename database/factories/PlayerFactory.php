<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Player>
 */
class PlayerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'country_id' => $this->faker->numberBetween(1, 238),
            'category_id' => $this->faker->numberBetween(1, 3),
            'user_id' => $this->faker->numberBetween(2, 4),
            'team_id' => $this->faker->numberBetween(1, 3),
            'name' => $this->faker->name,
            'date_of_birth' => $this->faker->date(),
            'height' => $this->faker->randomNumber(),
            'height_unit' => $this->faker->randomElement(["cm", "m"]),
            'weight' => $this->faker->randomNumber(),
            'weight_unit' => $this->faker->randomElement(["kg", "lb"]),
            'position' => $this->faker->randomElement(["Point Guard", "Shooting Guard", "Small Forward", "Power Forward", "Center"]),
            'image' => $this->faker->word,
            'skills' => $this->faker->word,
            'video_link' => $this->faker->word,
            'health_insurance' => $this->faker->word,
            'injury_history' => $this->faker->text,
            'medical_report' => $this->faker->word,
            'bio' => $this->faker->text,
            'status' => $this->faker->randomElement(["active", "inactive"]),
            'created_at' => $this->faker->dateTimeBetween('2024-01-01', '2024-12-31'),

        ];
    }
}
