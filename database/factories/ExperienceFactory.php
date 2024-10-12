<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Experience>
 */
class ExperienceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'job_seeker_id' => 1,
            'title' => 'Associate Software Engineer',
            'description' => 'I worked there in PHP stack',
            'org_name' => 'Brain Station 23',
            'start' => fake()->date(),
            'end' => fake()->date(),
        ];
    }
}
