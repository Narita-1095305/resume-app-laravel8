<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class ResumeFactory extends Factory
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
            'title' => $this->faker->realText(10),
            'users_id' => self::$sequence++,
            'spouse_num' => rand(0, 13),
            'is_spouse' => $this->faker->randomElement(['-1','0','1']),
            'is_spouse_dependent' => $this->faker->randomElement(['-1','0','1']),
            'commuting_hour' => rand(0, 4),
            'commuting_minutes' => rand(0, 59),
            'other' => $this->faker->realText(100),
            'self_pr' => $this->faker->realText(100),
            'result' => $this->faker->randomElement(['お祈り','面接結果待','内定']),
        ];
    }
}
