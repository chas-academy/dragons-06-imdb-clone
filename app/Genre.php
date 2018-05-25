<?php

namespace MoviKyte;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = ['genre_title'];

    protected $table = 'genres';
}
