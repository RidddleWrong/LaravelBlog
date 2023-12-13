<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterRequest;
use App\Models\Category;
use App\Models\Post;

class IndexController extends Controller
{
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();
        $filter = app()->make(PostFilter::class, ['queryParams'=>array_filter($data)]);

        $posts = Post::filter($filter)->paginate(6);
        $randomPosts = Post::get()->random(4);
        $likedPosts = Post::orderBy('user_likes_count', 'DESC')->get()->take(4);
        $categories = Category::all();

        return view('posts.index', compact('posts', 'randomPosts', 'likedPosts', 'categories'));
    }
}
