<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\Rol;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         //\App\Models\User::factory(10)->create();
    
         $this->call(RolSeeder::class);
         $this->call(UserSeeder::class);
         $this->call(CategorySeeder::class);
         $this->call(PostSeeder::class);
         
    }
}
