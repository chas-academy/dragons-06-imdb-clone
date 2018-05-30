<?php

namespace Moviekyte;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['movie_id', 'author_id', 'title', 'body', 'rating'];

    protected $table = 'reviews';

    public function user()
    {
        return $this->belongsTo('Moviekyte\User');
    }

    public function movie()
    {
        return $this->belongsTo('Moviekyte\Movie');
    }
}
