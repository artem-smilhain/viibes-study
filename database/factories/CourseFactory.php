<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $statuses = array_keys(Course::getStatuses());
        return [
            'name_sk' => $this->faker->colorName(),
            'start_date' => $this->faker->date(),
            'status_id' => $statuses[array_rand($statuses)],
            'telegram_link' => $this->faker->url(),
        ];
    }
}
