<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'author_id' => $this->faker->numberBetween(1, 10), // Assuming you have 10 users
            'title' => $this->faker->sentence,
            'thumbnail' => $this->faker->imageUrl,
            'content' => $this->faker->paragraph,
        ];
    }
}
