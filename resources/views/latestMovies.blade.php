@extends('layouts.default')
@section('title')
Search Results
@endsection
@section('content')
<section class="hero is-medium is-primary is-bold">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        Primary bold title
      </h1>
      <h2 class="subtitle">
        Primary bold subtitle
      </h2>
    </div>
  </div>
</section>
  <nav class="pagination is-centered" role="navigation" aria-label="pagination">
    <a class="pagination-previous">Previous</a>
    <a class="pagination-next">Next letter</a>
    <ul class="pagination-list">
      <li>
        <a class="pagination-link" aria-label="Goto page 1">A</a>
      </li>
      <li>
        <span class="pagination-ellipsis">&hellip;</span>
      </li>
      <li>
        <a class="pagination-link" aria-label="Goto page 45">R</a>
      </li>
      <li>
        <a class="pagination-link is-current" aria-label="Page 46" aria-current="page">S</a>
      </li>
      <li>
        <a class="pagination-link" aria-label="Goto page 47">T</a>
      </li>
      <li>
        <span class="pagination-ellipsis">&hellip;</span>
      </li>
      <li>
        <a class="pagination-link" aria-label="Goto page 86">Z</a>
      </li>
    </ul>
  </nav>
  <div class="card">
  <div class="card-content">
    <div class="media">
      <div class="media-left">
        <figure class="image is-128x128">
          <img src="https://bulma.io/images/placeholders/256x256.png" alt="Placeholder image">
        </figure>
      </div>
      </div>
      @foreach ($movies as $movie)
      <div class="movie-title media-content">
        <p class="title is-4">{{ $movie->title }}</p>
        <p class="movie-actors subtitle is-6">{{ $movie->actors }}</p>
      </div>

    <div class="content">
    {{ $movie->plot }}
    </div>
    @endforeach
    <a class="button is-primary is-outlined">
        <span class="icon is-small">
          <i class="fa fa-thumbs-up"></i>
        </span>
        <h1 class="title is-6">Add to watchlist</h1>
      </a>
  </div>
</div>
  <!-- <div class="columns">
    <div class="column">
  
      <figure class="image is-128x128">
        <img src="https://bulma.io/images/placeholders/128x128.png">
      </figure>
      <p class="title is-4">Title 1</p>
      <h1 class="subtitle is-6">"Lorem t ducimus obcaecati delectus! Lorem ipsum dolor sit amet.</h1>
      <a class="button is-primary is-outlined">
        <span class="icon is-small">
          <i class="fa fa-thumbs-up"></i>
        </span>
        <h1 class="title is-6">Add to watchlist</h1>
      </a>
    </div>
  </div>
   
  
  
  <div class="column">
      Title
      <figure class="image is-128x128">
        <img src="https://bulma.io/images/placeholders/128x128.png">
      </figure>
      <h1 class="title is-6">Lorem ipsum, ne itaque sit ducimus obcaecati delectus!</h1>
      <a class="button is-primary is-outlined">
        <span class="icon is-small">
          <i class="fa fa-thumbs-up"></i>
        </span>
        <h1 class="title is-6">Add to watchlist</h1>
      </a>
    </div>
    <div class="column">
      Title
      <figure class="image is-128x128">
        <img src="https://bulma.io/images/placeholders/128x128.png">
      </figure>
      <h1 class="title is-6">Lorem ipsum, ne itaque sit ducimus obcaecati delectus!</h1>
      <a class="button is-primary is-outlined">
        <span class="icon is-small">
          <i class="fa fa-thumbs-up"></i>
        </span>
        <h1 class="title is-6">Add to watchlist</h1>
      </a>
    </div>
      <div class="column">
        Title
        <figure class="image is-128x128">
          <img src="https://bulma.io/images/placeholders/128x128.png">
        </figure>
        <h1 class="title is-6">Lorem ipsum,sit ducimus obcaecati delectus!</h1>
        <a class="button is-primary is-outlined">
          <span class="icon is-small">
            <i class="fa fa-thumbs-up"></i>
          </span>
          <h1 class="title is-6">Add to watchlist</h1>
        </a>
      </div>
    </div>
  </div>

  <div class="columns">
    <div class="column">
      Title
      <figure class="image is-128x128">
        <img src="https://bulma.io/images/placeholders/128x128.png">
      </figure>
      <h1 class="title is-6">Lorem t ducimus obcaecati delectus Lorem ipsum dolor sit amet.!</h1>
      <a class="button is-primary is-outlined">
        <span class="icon is-small">
          <i class="fa fa-thumbs-up"></i>
        </span>
        <h1 class="title is-6">Add to watchlist</h1>
      </a>
    </div>
    <div class="column">
      Title
      <figure class="image is-128x128">
        <img src="https://bulma.io/images/placeholders/128x128.png">
      </figure>
      <h1 class="title is-6">Lorem ipsum, ne itaque sit ducimus obcaecati delectus!</h1>
      <a class="button is-primary is-outlined">
        <span class="icon is-small">
          <i class="fa fa-thumbs-up"></i>
        </span>
        <h1 class="title is-6">Add to watchlist</h1>
      </a>
    </div>
    <div class="column">
      Title
      <figure class="image is-128x128">
        <img src="https://bulma.io/images/placeholders/128x128.png">
      </figure>
      <h1 class="title is-6">Lorem ipsum, ne itaque sit ducimus obcaecati delectus!</h1>
      <a class="button is-primary is-outlined">
        <span class="icon is-small">
          <i class="fa fa-thumbs-up"></i>
        </span>
        <h1 class="title is-6">Add to watchlist</h1>
      </a>
    </div>
      <div class="column">
        Title
        <figure class="image is-128x128">
          <img src="https://bulma.io/images/placeholders/128x128.png">
        </figure>
        <h1 class="title is-6">Lorem ipsum,sit ducimus obcaecati delectus!</h1>
        <a class="button is-primary is-outlined">
          <span class="icon is-small">
            <i class="fa fa-thumbs-up"></i>
          </span>
          <h1 class="title is-6">Add to watchlist</h1>
        </a>
      </div>
    </div>
  </div>

  <div class="columns">
    <div class="column">
      Title
      <figure class="image is-128x128">
        <img src="https://bulma.io/images/placeholders/128x128.png">
      </figure>
      <h1 class="title is-6">Lorem t ducimus obcaecati delectus! Lorem ipsum dolor sit amet.</h1>
      <a class="button">
        <span class="icon is-small">
          <i class="fa fa-thumbs-up"></i>
        </span>
        <h1 class="title is-6">Add to watchlist</h1>
      </a>
    </div>
    <div class="column">
      Title
      <figure class="image is-128x128">
        <img src="https://bulma.io/images/placeholders/128x128.png">
      </figure>
      <h1 class="title is-6">Lorem ipsum, ne itaque sit ducimus obcaecati delectus!</h1>
      <a class="button">
        <span class="icon is-small">
          <i class="fa fa-thumbs-up"></i>
        </span>
        <h1 class="title is-6">Add to watchlist</h1>
      </a>
    </div>
    <div class="column">
      Title
      <figure class="image is-128x128">
        <img src="https://bulma.io/images/placeholders/128x128.png">
      </figure>
      <h1 class="title is-6">Lorem ipsum, ne itaque sit ducimus obcaecati delectus!</h1>
      <a class="button">
        <span class="icon is-small">
          <i class="fa fa-thumbs-up"></i>
        </span>
        <h1 class="title is-6">Add to watchlist</h1>
      </a>
    </div>
      <div class="column">
        Title
        <figure class="image is-128x128">
          <img src="https://bulma.io/images/placeholders/128x128.png">
        </figure>
        <h1 class="title is-6">Lorem ipsum,sit ducimus obcaecati delectus!</h1>
        <a class="button">
          <span class="icon is-small">
            <i class="fa fa-thumbs-up"></i>
          </span>
          <h1 class="title is-6">Add to watchlist</h1>
        </a>
      </div>
    </div>
  </div>
  <div class="columns">

    <div class="column">
      Title
      <figure class="image is-128x128">
        <img src="https://bulma.io/images/placeholders/128x128.png">
      </figure>
      <h1 class="title is-6">Lorem t ducimus obcaecati delectus! Lorem ipsum dolor sit amet.</h1>
      <a class="button">
        <span class="icon is-small">
          <i class="fa fa-thumbs-up"></i>
        </span>
        <h1 class="title is-6">Add to watchlist</h1>
      </a>
    </div>
    <div class="column">
      Title
      <figure class="image is-128x128">
        <img src="https://bulma.io/images/placeholders/128x128.png">
      </figure>
      <h1 class="title is-6">Lorem ipsum, ne itaque sit ducimus obcaecati delectus!</h1>
      <a class="button">
        <span class="icon is-small">
          <i class="fa fa-thumbs-up"></i>
        </span>
        <h1 class="title is-6">Add to watchlist</h1>
      </a>
    </div>
    <div class="column">
      Title
      <figure class="image is-128x128">
        <img src="https://bulma.io/images/placeholders/128x128.png">
      </figure>
      <h1 class="title is-6">Lorem ipsum, ne itaque sit ducimus obcaecati delectus!</h1>
      <a class="button">
        <span class="icon is-small">
          <i class="fa fa-thumbs-up"></i>
        </span>
        <h1 class="title is-6">Add to watchlist</h1>
      </a>
    </div>
      <div class="column">
        Title
        <figure class="image is-128x128">
          <img src="https://bulma.io/images/placeholders/128x128.png">
        </figure>
        <h1 class="title is-6">Lorem ipsum,sit ducimus obcaecati delectus!</h1>
        <a class="button">
          <span class="icon is-small">
            <i class="fa fa-thumbs-up"></i>
          </span>
          <h1 class="title is-6">Add to watchlist</h1>
        </a>
      </div>
    </div>
  </div>
  <nav class="pagination is-centered" role="navigation" aria-label="pagination">
    <a class="pagination-previous">Previous</a>
    <a class="pagination-next">Next page</a>
    <ul class="pagination-list">
      <li>
        <a class="pagination-link" aria-label="Goto page 1">1</a>
      </li>
      <li>
        <span class="pagination-ellipsis">&hellip;</span>
      </li>
      <li>
        <a class="pagination-link" aria-label="Goto page 45">45</a>
      </li>
      <li>
        <a class="pagination-link is-current" aria-label="Page 46" aria-current="page">46</a>
      </li>
      <li>
        <a class="pagination-link" aria-label="Goto page 47">47</a>
      </li>
      <li>
        <span class="pagination-ellipsis">&hellip;</span>
      </li>
      <li>
        <a class="pagination-link" aria-label="Goto page 86">86</a>
      </li>
    </ul> -->
  </nav>
@endsection
