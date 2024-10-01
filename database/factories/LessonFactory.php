<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lesson>
 */
class LessonFactory extends Factory
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
            'start_at' => $this->faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),
            'meeting_link' => $this->faker->url(),
            'description' => $this->faker->text(),
            'notes' => $this->faker->text(),
            'video_link' => $this->faker->url(),
            'course_id' => $this->faker->randomDigitNotZero(),
        ];
    }
}
