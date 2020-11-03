<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    public function problems()
    {
        return $this->belongsToMany(Problem::class);
    }
}
