<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BlogUsreLikeOrDislike>
 */
class BlogUsreLikeOrDislikeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'blog_id' => rand(1, 100),
            'user_id' => rand(1, 100),
            'like_or_dislike' => rand(0, 1),
        ];
    }
}
