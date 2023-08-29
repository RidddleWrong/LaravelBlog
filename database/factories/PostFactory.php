<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
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
            'title' => fake()->sentence(random_int(1, 3)),
            'content' => '<p><i>'.fake()->text(1000).'</p></i>',//simulating creating with post form and using form features
            'author_id' => User::pluck('id')->random(),
            'category_id' => Category::pluck('id')->random(),
            'preview_image' => $this->faker->imageUrl,
            'main_image' => $this->faker->imageUrl,
        ];
    }
}
