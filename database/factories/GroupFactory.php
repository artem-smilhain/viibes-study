<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Group>
 */
class GroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name_sk' => $this->faker->city(),
            'name' => $this->faker->name(),
            'element_color' => $this->faker->hexColor(),
            'row_weight' => $this->faker->randomDigitNotZero(),
            //'description' => $this->faker->text(),
        ];
    }
}
