<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle(),
            'description' => fake()->text(),
            'responsibilities' => fake()->text(),
            'requirements' => fake()->text(),
            'min_salary' => fake()->numberBetween(10000, 40000),
            'max_salary' => fake()->numberBetween(50000, 100000),
            'benefits' => fake()->text(),
            'job_type' => 'on-site',
            'location' => fake()->address(),
        ];
    }
}
