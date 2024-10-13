<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        // Create a JobSeeker Profile
        \App\Models\Education::factory()->create();
        \App\Models\Experience::factory()->create();
        \App\Models\Skill::factory()->create();

        // Create an Employer Profile
        \App\Models\Employer::factory()->create();

        // Create a Job Post
        \App\Models\Job::factory()->create();
    }
}
