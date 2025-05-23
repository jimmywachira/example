<?php

use App\Models\User;
use App\Models\Job;
use App\Models\Employer;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
             'name' => 'Test User',
                'username' => 'testuser',
             'email' => 'test@example.com',
         ]);

        Job::factory(10)->create();

        Employer::factory(10)->create();
       
         $this->call([]);
    }
}  