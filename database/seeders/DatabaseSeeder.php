<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(100)->create();
        \App\Models\Auther::factory(10)->create();
        \App\Models\Category::factory(10)->create();
        \App\Models\Blog::factory(100)->create();
        \App\Models\BlogCategory::factory(690)->create();
        \App\Models\Comment::factory(4000)->create();
        \App\Models\BlogUsreLikeOrDislike::factory(100000)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
