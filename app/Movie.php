<?php

namespace MoviKyte;

use Illuminate\Database\Eloquent\Model;

use MoviKyte\Watchlist; 

class Movie extends Model
{
    protected $fillable = ['id', 'title', 'genre', 'year','actors','plot', 'director', 'rating', 'reviews'];

    public function watchlists()
    {
        return $this->belongsToMany('MoviKyte\Watchlist');
    }

    public function addToWatchlist($movieId)
    {
        $userId = Auth::user()->id;

        $movieModel = new Movie();
        $movieModel->addToWatchlist($movieId, $userId);

        return redirect('home');
    }
}
