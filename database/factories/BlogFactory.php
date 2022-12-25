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
    public function definition()
    {
        $name = fake()->sentence() . rand(111111111,9999999999999);
        return [
            'auther_id' => rand(1, 10),
            'title' => $name,
            'slug' => str($name)->slug(),
            'image' => fake()->imageUrl(),
            'body' => fake()->paragraph() . fake()->paragraph() . fake()->paragraph(),
        ];
    }
}
