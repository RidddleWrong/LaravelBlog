<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;

class IndexController extends Controller
{
    public function __invoke()
    {
        dd(1);
        $categories = Category::all();
        return view('main.index', compact('categories'));
    }
}
