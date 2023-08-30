<?php

namespace App\Http\Controllers\Post\Like;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    public function __invoke(Post $post)
    {
        Auth::user()->likedPosts()->toggle($post->id);
        return redirect()->back();
    }
}
