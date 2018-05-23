<?php

namespace MoviKyte;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['id', 'title', 'genre', 'year','actors','plot', 'director', 'rating', 'reviews', 'image'];

    protected $table = 'movies';

    public function watchlists()
    {
        return $this->belongsToMany('MovieKyte\WatchList');
    }
}
