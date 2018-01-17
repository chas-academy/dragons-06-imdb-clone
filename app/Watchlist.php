<?php

namespace MoviKyte;

use Illuminate\Database\Eloquent\Model;

use MoviKyte\User;
use MoviKyte\Movie;

class Watchlist extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('MoviKyte\User');
    }

    public function movies()
    {
        return $this->hasMany('MoviKyte\Movie');
    }
}
