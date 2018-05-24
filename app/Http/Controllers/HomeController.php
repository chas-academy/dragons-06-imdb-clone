<?php

namespace MoviKyte\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use MoviKyte\WatchList;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $watchlist = [];

        foreach ($user->watchlists as $watchlist) {
            $watchlist = WatchList::find($watchlist->id);
        }

        return view('home')->with(['watchlist' => $watchlist]);
    }

    public function addMovieToWatchlist(int $watchlistId, int $movieId)
    {
        $watchlist = WatchList::find($watchlistId);
        $watchlistMovies = $watchlist->movies;

        if (!in_array($movieId, $watchlistMovies)) {
            $watchlistMovies[] = $movieId;
        }

        $watchlist->movies = $watchlistMovies;
        $watchlist->save();

        return back()->with(['message' => 'Successfully added movie to watchlist']);
    }

    public function deleteMovieFromWatchlist(int $watchlistId, int $movieId)
    {
        $watchlist = WatchList::find($watchlistId);

        $movie = $watchlist->movies()->where('id', $movieId);

        $watchlistMovies = array_filter($watchlist->movies, function ($id) use ($movieId) {
            return $id !== $movieId;
        });

        $watchlist->movies = $watchlistMovies;
        $watchlist->save();

        return back()->with(['message' => 'Successfully removed movie from watchlist']);
    }
}
