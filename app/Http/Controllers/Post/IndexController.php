<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = Post::paginate(6);
        $randomPosts = Post::get()->random(4);
        $likedPosts = Post::withCount('likedPosts')->get()->take(4);
        return view('posts.index', compact('posts', 'randomPosts', 'likedPosts'));
    }
}
