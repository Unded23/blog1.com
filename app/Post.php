<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'slug', 'seo_title', 'excerpt', 'body', 'meta_description', 'meta_keywords', 'active', 'image', 'user_id'
    ];

}
