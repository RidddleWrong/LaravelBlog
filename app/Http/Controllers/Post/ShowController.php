<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;

class ShowController extends Controller
{
    public function __invoke(Post $post)
    {
//        $post->author_name = User::where('id', $post->author_id)->value('name');
        $post->author_name = $post->author->name;
        $relatedPosts = Post::where('category_id', $post->category_id)
            ->where('id', '!=', $post->id)
            ->get()
            ->take(3);
        return view('posts.show', compact('post', 'relatedPosts'));
    }
}
