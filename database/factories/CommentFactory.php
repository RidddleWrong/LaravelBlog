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
    public function definition()
    {
        return [
            'title' => fake()->sentence(random_int(2, 4)),
            'content' => fake()->text(),
            'preview_image' => fake()->image('public/assets/images'),
            'main_image' => fake()->image('public/assets/images'),
            'category_id' => Category::pluck('id')->random(),
            'created_at' => now(),
        ];
    }
}
