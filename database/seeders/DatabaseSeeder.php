<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $users = User::factory(10)->create();
        $users[] = User::updateOrCreate(['email' => 'admin@gmail.com'], ['name' => 'Admin', 'role' => 0, 'email_verified_at' => now(), 'remember_token' => Str::random(10), 'password' => '$2y$10$l9l8aj86CttPv2987/G0teGLA64TrH7cTGepFHQpR6jJbBRDf/WIa']);
        $users[] = User::updateOrCreate(['email' => 'user@gmail.com'], ['name' => 'User', 'role' => 1, 'email_verified_at' => now(), 'remember_token' => Str::random(10), 'password' => '$2y$10$l9l8aj86CttPv2987/G0teGLA64TrH7cTGepFHQpR6jJbBRDf/WIa']);

        Category::factory(3)->create();
        $posts = Post::factory(30)->create();
        $tags = Tag::factory(6)->create();
        Comment::factory(150)->create();

        foreach ($users as $user) {
            $user->likedPosts()->sync($posts->pluck('id')->random(15));
        }

        foreach ($posts as $post) {
            $post->tags()->sync($tags->pluck('id')->random(5));
        }
    }
}
