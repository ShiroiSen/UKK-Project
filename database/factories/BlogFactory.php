<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(mt_rand(2, 4)),
            'slug' => fake()->slug(),
            'body' => collect(fake()->paragraphs(mt_rand(5, 100)))->map(fn($p) => "<p>$p</p>")->implode(''),
            'user_id' => mt_rand(1,7),
            'category_id' => mt_rand(1,6),
        ];
    }
}
