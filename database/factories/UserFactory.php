<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'last_name' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'birth_date' => $this->faker->date('Y-m-d'),
            'birth_place' => $this->faker->city(),
            'mobile' => $this->faker->phoneNumber(),
            'messenger' => $this->faker->name(),
 //           'role_id' => 2,
            'status_id' => User::STATUS_ACTIVE,
            'gender_id' => User::GENDER_ID_MALE,
            'citizenship' => $this->faker->country(),
            'country_id' => 1,
            'city' => $this->faker->city(),
            'street' => $this->faker->streetName(),
            'house' => $this->faker->buildingNumber(),
            'ps' => $this->faker->postcode(),
            'parent' => $this->faker->name(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
