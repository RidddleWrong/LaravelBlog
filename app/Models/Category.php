<?php

namespace App\Models;

use Dyrynda\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes, CascadeSoftDeletes;

    protected $table = 'categories';
    protected $guarded = false;
    protected $cascadeDeletes = ['posts'];

    function posts(){
        return $this->hasMany(Post::class);
    }
}
