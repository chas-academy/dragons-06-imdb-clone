@extends('layouts.default')

@section('title')
  Search Results
@endsection

@section('content')
<div class="latest-background">
  <section class="section">
    <section class="main-title-latest">
      <h1 class="title is-2 has-text-white has-text-weight-light">Explore Movies</h1>
      @foreach (Auth::user()->watchlists as $watchlist)
        @foreach ($movies as $movie)
          @if (!in_array($movie->id, $watchlist->movies))
            <form class="form-horizontal" method="POST" action="{{ route('watchlist.movie.add', ['watchlistId' => $watchlist->id, 'movieId' => $movie->id]) }}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

              <div class="movie-container is-inline-block">
                <figure class="image is-16by9">
                  <img class="has-text-centered" src="https://bulma.io/images/placeholders/256x256.png" alt="Placeholder image">
                </figure>
                <div class="latest-movie-title">
                  <p class="title is-6 has-text-white has-text-centered">{{ $movie->title }}</p>
                </div>

                  <button class="button is-primary is-outlined" type="submit">
                    <span class="icon is-small">
                      <i class="fa fa-thumbs-up"></i>
                    </span>
                    <span class="title is-6 has-text-white">Add to watchlist</span>
                  </button>
              </div>
            </form>
          @else
          <form class="form-horizontal" method="POST" action="{{ route('watchlist.movie.delete', ['watchlistId' => $watchlist->id, 'movieId' => $movie->id]) }}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="hidden" name="_method" value="DELETE">

              <div class="movie-container is-inline-block">
                <figure class="image is-16by9">
                  <img class="has-text-centered" src="https://bulma.io/images/placeholders/256x256.png" alt="Placeholder image">
                </figure>
                <div class="latest-movie-title">
                  <p class="title is-6 has-text-white has-text-centered">{{ $movie->title }}</p>
                </div>

                <button class="button is-danger" type="submit">
                  <span class="icon is-small">
                    <i class="fa fa-times"></i>
                  </span>
                  <span class="title is-6 has-text-white">Remove from watchlist</span>
                </button>
              </div>
            </form>
          @endif
        @endforeach
      @endforeach
    </section>
@endsection
