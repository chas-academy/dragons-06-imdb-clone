@extends('layouts.default')
@section('title')
Search Results
@endsection
@section('content')

<section class="hero is-medium is-primary is-bold">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        Latest Movies
      </h1>
      <h2 class="subtitle">
        Explore our latest movies!
      </h2>
    </div>
  </div>
</section>

<div class="latest-background">
<section class="section">
<!-- <h1 class="title is-2 has-text-white has-text-weight-light">Latest movies</h1> -->
              
            @foreach ($movies as $movie)
            <div class="movie-container is-inline-block">
      <figure class="image is-16by9">
          <img class="has-text-centered" src="https://bulma.io/images/placeholders/256x256.png" alt="Placeholder image">
        </figure>
      <div class="latest-movie-title">
        <p class="title is-6 has-text-white has-text-centered">{{ $movie->title }}</p>
        <p class="movie-actors subtitle is-7 has-text-white has-text-weight-light has-text-centered">{{ $movie->actors }}</p>
      </div>
    <!-- <div class="content has-text-white has-text-weight-light">
    {{ $movie->plot }}
    </div> -->
    <a class="button is-primary is-outlined">
        <span class="icon is-small">
          <i class="fa fa-thumbs-up"></i>
        </span>
        <h1 class="title is-6 has-text-white">Add to watchlist</h1>
      </a>
</div>
    @endforeach
            
            
</section>




<nav class="pagination is-centered" role="navigation" aria-label="pagination">
    <a class="pagination-previous">Previous</a>
    <a class="pagination-next">Next letter</a>
  </nav>
</div>
</div>

@endsection
