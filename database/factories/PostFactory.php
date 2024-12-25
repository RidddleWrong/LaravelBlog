<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\File;

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
        $imageFiles = File::allFiles(public_path('storage/images'));

        return [
            'title' => fake()->sentence(random_int(4, 8)),
            'content' => '<p><i>'.fake()->text(5000).'</p></i>',// tags <p><i> for simulating creating post using form features
            'author_id' => User::pluck('id')->random(),
            'category_id' => Category::pluck('id')->random(),
            'preview_image' => 'images/'.$this->faker->randomElement($imageFiles)->getFilename(),
            'main_image' => 'images/'.$this->faker->randomElement($imageFiles)->getFilename(),
        ];
    }
}
