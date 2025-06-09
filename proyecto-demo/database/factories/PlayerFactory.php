<?php

namespace Database\Factories;

use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Player>
 */
class PlayerFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'age' => $this->faker->numberBetween(18, 40),
            'nationality' => $this->faker->country,
            'position_id' => \App\Models\Position::inRandomOrder()->first()->id,
            'image' => $this->faker->optional()->imageUrl(200, 200, 'people'),
        ];
    }
}
