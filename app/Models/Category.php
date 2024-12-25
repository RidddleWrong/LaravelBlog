<?php

namespace App\Models;

use Dyrynda\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes, CascadeSoftDeletes;

    public $timestamps = false;
    protected $guarded = false;
    protected $cascadeDeletes = ['posts'];

    public function posts(){
        return $this->hasMany(Post::class);
    }
}
