<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LicenceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

     private static $sequence = 1;
     public function definition()
     {
         return [
             'resumes_id' => self::$sequence++,
             'year' => rand(1960, 2050),
             'month' => rand(1, 12),
             'background' => $this->faker->realText(15),
         ];
     }
}
