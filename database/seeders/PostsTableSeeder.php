<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define the number of fake posts you want to create
        $numberOfPosts = 5;

        // Create fake posts
        Post::factory($numberOfPosts)->create([
            'author_id' => User::all()->random()->id,
        ]);
    }
}
