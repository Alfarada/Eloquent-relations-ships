<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    public function users()
    {
        $this->hasMany(User::class);
    }
}
