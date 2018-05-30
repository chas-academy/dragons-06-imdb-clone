<?php

namespace Moviekyte;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = ['genre_title'];

    protected $table = 'genres';

    public function movies()
    {
        return $this->belongsToMany('Moviekyte\Movie');
    }
}
