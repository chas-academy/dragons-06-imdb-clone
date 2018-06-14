<?php

namespace Moviekyte;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['id', 'title', 'genre', 'year','actors','plot', 'director', 'rating', 'reviews', 'image'];

    protected $table = 'movies';

    public function watchlists()
    {
        return $this->belongsToMany('Moviekyte\WatchList');
    }

    public function reviews()
    {
        return $this->hasMany('Moviekyte\Review');
    }

    public function genres()
    {
        return $this->belongsToMany('Moviekyte\Genre');
    }

    public function people()
    {
        return $this->hasMany('Moviekyte\People');
    }
}
