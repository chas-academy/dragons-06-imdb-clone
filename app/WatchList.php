<?php

namespace Moviekyte;

use Illuminate\Database\Eloquent\Model;
use Moviekyte\Movie;

class WatchList extends Model
{
    protected $attributes = array(
        'movies' => '[]'
    );

    protected $casts = ['movies' => 'array'];

    protected $fillable = ['movies', 'user_id'];

    protected $table = 'watchlists';

    protected $appends = ['movies'];

    public function movies()
    {
        // return $this->hasMany('Moviekyte\Movie', 'id', '');
        return Movie::all()->filter(function ($movie) {
            return in_array($movie->id, $this->movies) ? $movie : null;
        });
    }

    public function users()
    {
        return $this->belongsTo('Moviekyte\User');
    }
}
