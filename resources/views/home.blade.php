@extends('layouts.default')

@section('title')
  Dashboard {{ Auth::user()->name }}
@endsection @section('content')

{{ csrf_field()}}

<section class="hero is-medium is-primary is-bold">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        Dashboard
      </h1>
      <h2 class="subtitle">
        Welcome {{ Auth::user()->name }}!
      </h2>
    </div>
  </div>
</section>

<section class="columns">
  <div class="column margin">
    <h1 class="title">{{ Auth::user()->name }}</h1>
    @if (session('status'))
      <div class="notification is-primary">
        {{ session('status') }}
      </div>
    @endif

    <article class="buttons has-addons is-centered">
      <a class="button is-primary is-large" href="{{ url('/editprofile') }}">
        Edit profile
        <a class="button is-info is-large" href="{{ url('/editpassword') }}">
          Change password
        </a>
    </article>

    <div class="card">
      <div class="card-content">
        <div class="media">
          <div class="media-left">
            <figure class="image is-48x48">
              <img src="/uploads/profile/default.png" alt="User icon">
            </figure>
          </div>
          <div class="media-content">
            <p class="title is-4">{{ Auth::user()->name }}</p>
            <p class="subtitle is-6">{{ Auth::user()->email }}</p>
          </div>
        </div>

        <div class="content">
          {{ Auth::user()->bio }}
          <br>
          <small>
            Member since
            <time datetime="{{ Auth::user()->creater_at }}">
              {{ Auth::user()->creater_at }}
            </time>
          </small>
        </div>
      </div>
    </div>

    <br>


  </div>
  <div class="column margin">
    <h1 class="title">Your watchlist!</h1>
    <article class="tile">
      <div class="field is-grouped is-grouped-multiline">
        @foreach($watchlist->movies() as $movie)
          <form class="form-horizontal" method="POST" action="{{ route('watchlist.movie.delete', ['watchlistId' => $watchlist->id, 'movieId' => $movie->id]) }}">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="movie-container is-inline-block">
              <figure class="image is-16by9">
                <img class="has-text-centered" src="https://bulma.io/images/placeholders/256x256.png" alt="Placeholder image">
              </figure>
              <div class="latest-movie-title">
                <p class="title is-6 has-text-centered">{{ $movie->title }}</p>
              </div>
              <button class="button is-danger" type="submit">
                <span class="icon is-small">
                  <i class="fa fa-times"></i>
                </span>
                <span class="title is-6 has-text-white">Remove from watchlist</span>
              </button>
            </div>
          </form>
        @endforeach
      </div>
  </div>
  </article>
  <div class="column margin">
    <h1 class="title">Your reviews!</h1>
    <h1 class="title">Your ratings!</h1>
    <div class="field is-grouped is-grouped-multiline">
      <div class="control">
        <div class="tags has-addons">
          <span class="tag is-dark">Casablanca</span>
          <span class="tag is-danger">100</span>
        </div>
      </div>
      <div class="control">
        <div class="tags has-addons">
          <span class="tag is-dark">The Great Gatsby</span>
          <span class="tag is-info">4.2</span>
        </div>
      </div>
    </div>
  </div>

</section>
@endsection