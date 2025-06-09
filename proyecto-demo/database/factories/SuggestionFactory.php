<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Suggestion>
 */
class SuggestionFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'contact_name' => $this->faker->name(),
            'contact_email' => $this->faker->safeEmail(),
            'suggested_name' => $this->faker->name(),
            'suggested_age' => $this->faker->numberBetween(18, 30),
            'suggested_nationality' => $this->faker->country(),
            'suggested_position' => $this->faker->randomElement(['Portero', 'Defensa', 'Medio', 'Delantero']),
            'message' => $this->faker->optional()->paragraph(),
        ];
    }
}
