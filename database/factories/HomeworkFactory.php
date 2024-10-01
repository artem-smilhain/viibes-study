<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Homework>
 */
class HomeworkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'lesson_id' => $this->faker->randomDigitNotZero(),
            'date_created_at' => $this->faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),
            'deadline_at' => $this->faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),
            'homework' => $this->faker->text(),
            'reply' => $this->faker->text(),
            'grade' => $this->faker->text(),
        ];
    }
}
