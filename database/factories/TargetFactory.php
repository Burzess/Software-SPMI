<?php

namespace Database\Factories;

use App\Models\Indikator;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Target>
 */
class TargetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_indikator' => Indikator::factory(),
            'value' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }
}
