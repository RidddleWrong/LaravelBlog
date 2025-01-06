<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Dyrynda\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, Filterable, SoftDeletes, CascadeSoftDeletes;

    protected $guarded = false;
    protected $withCount = ['userLikes'];
    protected $with = ['category'];
    protected $cascadeDeletes = ['comments'];

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tags', 'post_id', 'tag_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id', 'id');
    }

    public function userLikes() // returns list of user model rows from users table
    {
        return $this->belongsToMany(User::class, 'post_user_likes', 'post_id', 'user_id');
    }


}
