<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class DeleteController extends BaseController
{
    public function __invoke(Post $post)
    {
        if($post->preview_image){
            Storage::delete('public/'.$post->preview_image); //image name already has 'images/' in it bc we used images in path parameter for put() method
        }
        if($post->main_image){
            Storage::delete('public/'.$post->main_image);
        }
        $post->delete();
        return redirect()->route('admin.post.index');
    }
}
