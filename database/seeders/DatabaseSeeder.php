<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\Post::factory(10)->create();

        // You can also call other seeders here
        $this->call([
            UserSeeder::class,
            PostSeeder::class,
            // Add other seeders as needed
            
        ]);

        
    }
}
