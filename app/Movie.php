<?php

namespace MoviKyte;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['id', 'title', 'genre', 'year','actors','plot', 'director', 'rating', 'reviews'];

    protected $table = 'movies';

    public function reviews()
    { 
        return $this->hasMany('Movikyte\review');
    }
}

