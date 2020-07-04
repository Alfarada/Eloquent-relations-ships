<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user()
    {
        $this->belongsTo(User::class);
    }

    public function category()
    {
        $this->belongsTo(Category::class);
    }
    
    public function coments()
    {
        $this->morphMany(Comment::class, 'commentable');
    }

    public function image()
    {
        $this->morphOne(Image::class, 'imageable');
    }

    public function tags()
    {
        $this->morphToMany(Tag::class, 'taggable');
    }
}
