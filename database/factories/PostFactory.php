<?php

namespace Database\Factories;

use App\Models\Category;
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
            'title' => $this->faker->name(),
            'slug' => $this->faker->slug(),
            'content' => $this->faker->paragraph(250),
            'image' =>$this->faker->imageUrl(),
            'status' => $this->faker->randomElement(['draft','published','archieved']),
            'published_at' => $this->faker->optional()->dateTimeThisYear(),
            'created_at' => now(),
            'updated_at'  => now(),
            'category_id' => Category::factory(),
        ];
    }
}
