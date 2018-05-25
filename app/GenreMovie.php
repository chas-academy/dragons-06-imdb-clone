<?php

namespace MoviKyte;

use Illuminate\Database\Eloquent\Model;

class GenreMovie extends Model
{
    protected $fillable = ['genre_id','movie_id'];

    protected $table = 'genres_movie';
}
