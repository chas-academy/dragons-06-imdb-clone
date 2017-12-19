<?php

namespace MoviKyte;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['id', 'titel', 'genre', 'year','actors','plot', 'director', 'rating', 'reviews'];
}
