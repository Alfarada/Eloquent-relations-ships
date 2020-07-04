<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function comentable()
    {
        return $this->morphTo();
    }
    
    public function user()
    {
        $this->belongsTo(User::class);
    }

}
