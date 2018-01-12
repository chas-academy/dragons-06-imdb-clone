<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.min.css">   

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/search.css') }}" rel="stylesheet">

</head>

<body>
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
      <h1 class="title is-6">Lorem t ducimus obcaecati delectus Lorem ipsum dolor sit amet.!</h1>
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
    </ul>
  </nav>
</body>

</html>
