<?php

namespace Incfile\MyBlog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function newFactory()
    {
        return new Factories\PostFactory();
    }
}
