<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;

class ShowController extends Controller
{
    public function __invoke(Category $category)
    {
        $posts = $category->posts()->paginate(6);

        return view('categories.posts.show', compact('posts', 'category'));
    }
}
