<?php

namespace Database\Factories;

use App\Models\Campaign;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Character>
 */
class CharacterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'level' => fake()->numberBetween(1, 20),
            'max_hp' => function (array $attributes) {
                return $attributes['level'] * 8;
            },
            'current_hp' => function (array $attributes) {
                return fake()->numberBetween(0, $attributes['level'] * 8);
            },
            'campaign_id' => Campaign::factory()
        ];
    }
}
