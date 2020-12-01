<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meld extends Model
{
    protected $table = 'melds';

    public function user() {
        return $this->belongsTo(User::class);
    }

}
