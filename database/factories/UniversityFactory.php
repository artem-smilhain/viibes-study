<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\University>
 */
class UniversityFactory extends Factory
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
            'abbreviation' => $this->faker->firstName(),
            'abbreviation_sk' => $this->faker->firstName(),
            'description' => $this->faker->text(),
            'founding_year' => $this->faker->year(),
            'address' => $this->faker->address(),
            'address_sk' => $this->faker->address(),
            'site_url' => $this->faker->url(),
            'number_of_students' => $this->faker->numberBetween(1000, 200000),
//            'logo' => $this->faker->image('public/storage/upload', 640,480, null, false),
//            'image' => $this->faker->image('public/storage/upload', 640,480, null, false),
            'logo_src' => $this->faker->imageUrl(),
            'thumbnail_src' => $this->faker->imageUrl(),
            'google_map_src' => $this->faker->url(),
            'education_cost_en' => $this->faker->streetName(),
            'scholarships' => $this->faker->streetName(),
            'row_weight' => $this->faker->randomDigit(),
            'slug' => $this->faker->slug(),
            'city_id' => $this->faker->randomDigitNotZero(),
        ];
    }
}
