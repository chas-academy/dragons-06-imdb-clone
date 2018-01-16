@extends('layouts.default')
@section('title')
Search Results
@endsection
@section('content')



<div class="latest-background">
<section class="section">
  <section class="main-title-latest">
<h1 class="title is-2 has-text-white has-text-weight-light">Explore Movies</h1>
  </section>
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


@endsection
