<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Blog;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(6)->create();

        User::create([
            'name' => 'Ubaidillah',
            'username' => 'Ubaid_kun',
            'email' => 'ubaid.namaku@gmail.com',
            'password' => bcrypt('1234567890')
        ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Design',
            'slug' => 'design'
        ]);
        
        Category::create([
            'name' => 'Food',
            'slug' => 'food'
        ]);

        Category::create([
            'name' => 'Beauty',
            'slug' => 'beauty'
        ]);

        Category::create([
            'name' => 'Story',
            'slug' => 'story'
        ]);

        Category::create([
            'name' => 'Game',
            'slug' => 'game'
        ]);

        Category::create([
            'name' => 'Technology',
            'slug' => 'technology'
        ]);

        blog::factory(21)->create();
    }
}
