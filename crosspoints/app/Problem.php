<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    public function tips()
    {
        return $this->belongsToMany(Tip::class);
    }

    public function links()
    {
        return $this->belongsToMany(Link::class);
    }
}
