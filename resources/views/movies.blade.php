@extends('layouts.default')

@section('title')
  Titeln
@endsection

@section('content')
<section>
  <div class="hero is-large" style="background: -webkit-linear-gradient(top, rgba(212,228,239,1) 0%,rgba(134,174,204,1) 100%);background-size: cover;background-attachment: fixed">
    <div class="hero-body has-text-centered">
      <h1 class="title is-1 has-text-white-bis">
        {{ $movie->title }}
      </h1>

      <ul class="container field">
        @foreach($movie->genres as $genre)
          <li><span class="tag is-primary">{{$genre->genre_title}}</span></li>
        @endforeach
      </ul>

      <div class="has-text-centered container">
        <h2 class="title is-2 has-text-white-bis">Rate the movie!</h2>
        <form class="form-horizontal" method="POST" action="{{route('review.store')}}">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="hidden" name="author_id" value="{{ Auth::user()->id }}" />
          <input type="hidden" name="movie_id" value="{{ $movie->id }}" />

          <div class="field">
            <label class="label has-text-white-bis">Title</label>
            <div class="control">
              <input class="input" type="text" name="title" placeholder="Review title">
            </div>
          </div>

          <div class="field">
            <label class="label has-text-white-bis">Body</label>
            <div class="control">
              <textarea class="textarea" name="body" placeholder="Put down some words"></textarea>
            </div>
          </div>

          <div class="field">
            <h2 class="title is-1 has-text-white-bis" style="font-size: 2.5rem;">
              <output for="sliderWithValue">
                50
              </output>
            </h2>
            <input id="sliderWithValue" class="slider is-large wide" step="1" min="0" max="100" value="50" type="range" name="rating">
          </div>

          <div class="field is-grouped">
            <div class="control">
              <button class="button is-link">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>

  </div>
  <!--slut hero body-->
  <div class="hero-foot">
  </div>
  </div>
  <article class="content is-medium">
    <p>{{$movie->plot}}</p>
  </article>
  <article class="container">
    <h2>What other people think:</h2>
    @foreach($movie->reviews as $review)
      <h3>{{$review->title}}</h3>
      <p>{{$review->body}}</p>
      <div class="control">
        <div class="tags has-addons">
          <span class="tag is-danger">{{$review->rating}}</span>
        </div>
      </div>
    @endforeach
  </article>
</section>
</main>
@endsection