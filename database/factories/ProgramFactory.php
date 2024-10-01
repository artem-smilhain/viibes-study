<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Program>
 */
class ProgramFactory extends Factory
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
            'description' => $this->faker->text(),
            'faculty_id' => $this->faker->randomDigitNotZero(),
            'years_of_study' => $this->faker->randomDigitNotZero(),
            'is_in_combination' => $this->faker->boolean(),
            'academic_degree_id' => $this->faker->randomDigitNotZero(),
            'direction_id' => $this->faker->randomDigitNotZero(),
            'direction_2_id' => $this->faker->randomDigitNotZero(),
            'slug' => $this->faker->slug(),
            //'row_weight' => $this->faker->randomDigitNotZero(),
            //'group_id' => $this->faker->randomDigitNotZero(),
        ];
    }
}
