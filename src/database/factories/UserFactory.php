<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'family_name' => $this->faker->lastName(),
            'first_name' => $this->faker->firstName(),
            'family_furigana' => $this->faker->realText(10),
            'first_furigana' => $this->faker->realText(10),
            'birth_year' => $this->faker->year(),
            'birth_month' => $this->faker->month(),
            'birth_day' => $this->faker->dayOfMonth(),
            'gender' => $this->faker->randomElement(['1','2','3']),

            'telephone_number' => $this->faker->regexify('[0-9]{3}-[0-9]{4}-[0-9]{4}'),
            'zip_code' => 	$this->faker->regexify('[1-9]{3}-[0-9]{4}'),
            'address' => $this->faker->realText(10),
            'address_furigana' =>  $this->faker->realText(30),
            'building' =>  $this->faker->realText(10),

            'email' => $this->faker->unique()->safeEmail(),
            'password' => Hash::make('password'),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
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
