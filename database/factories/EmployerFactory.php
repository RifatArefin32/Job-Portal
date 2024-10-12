<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employer>
 */
class EmployerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'org_name' => fake()->company(),
            'org_details' => 'This is one the best company in Bangladesh',
            'org_size' => fake()->numberBetween(10, 10000),
            'org_address1' => fake()->address(),
            'org_address2' => fake()->address(),
            'org_address3' => fake()->address(),
            'org_url' => fake()->url()
        ];
    }
}
