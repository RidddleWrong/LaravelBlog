<?php

namespace App\Http\Controllers\Category\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;

class ShowController extends Controller
{
    public function __invoke(Category $category)
    {
        $posts = $category->posts()->paginate(6);
        $categories = Category::all();
        return view('categories.posts.show', compact('posts', 'category','categories'));
    }
}
