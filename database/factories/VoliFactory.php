<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gajih>
 */
class VoliFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'voli_id' => fake()->unique()->randomDigit(),
            'nama_voli' => fake()->firstName() . " ". fake()->lastName(),
            'negara' => fake()->paragraph(),
        ];
    }
}