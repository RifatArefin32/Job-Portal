<?php

namespace Database\Factories;

use App\Models\JobSeeker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Education>
 */
class EducationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'job_seeker_id' => JobSeeker::factory(),
            'title' => 'BSc',
            'institute' => 'KUET',
            'start_year' => fake()->year(),
            'pass_year' => fake()->year(),
            'result' => '3.81',
        ];
    }
}
