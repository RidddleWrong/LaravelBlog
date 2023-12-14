<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $users = User::factory(10)->create();
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
