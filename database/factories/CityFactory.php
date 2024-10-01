<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\City>
 */
class CityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->city(),
            'name_sk' => $this->faker->city(),
            'row_weight' => $this->faker->randomDigit(),
            'country_id' => $this->faker->randomDigitNotZero(),
            'post_id' => $this->faker->randomDigitNotZero(),
            'slug' => $this->faker->slug(),
        ];
    }
}
