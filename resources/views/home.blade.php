@extends('layouts.default')
@section('title')
Dashboard {{ Auth::user()->name }}
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


                    Hello there {{ Auth::user()->name }}! Welcome to your profile page.

                    <img src="/uploads/profile/{{ Auth::user()->image }}" style="width:100px; border-radius:50%;" alt="Profile picture">
                    <br>
                    my bio:
                    <div style="border: solid 1px black;">
                        {{ Auth::user()->bio }}
                    </div>
                    
                    {{ csrf_field() }}
                    <a href="{{ url('/editprofile') }}">edit profile</a>
                </div>
            </div>
        </div>
{{ csrf_field() }}
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
<h1 class="title">You!</h1>
          @if (session('status'))
              <div class="notification is-primary">
                  {{ session('status') }}
              </div>
          @endif



<article class="buttons has-addons is-centered">
<a class="button is-primary is-large"
   href="{{ url('/editprofile') }}">
   Edit profile
<a class="button is-info is-large"
   href="{{ url('/editpassword') }}">
   Change password
</a>
</article>

<div class="card">
<!--  <div class="card-image">
    <figure class="image is-4by3">
    <img src="/uploads/profile/{{ Auth::user()->image }}"
         style="//border-radius:50%;"
         alt="Profile picture">
    </figure>
  </div>-->
  <div class="card-content">
    <div class="media">
      <div class="media-left">
        <figure class="image is-48x48">
          <img src="/uploads/profile/default.png"
               alt="User icon">
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
        Member since <time datetime="{{ Auth::user()->creater_at }}">
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
  <div class="control">
    <div class="tags has-addons">
      <span class="tag is-dark">Harry Potter and the Philosopher's Stone</span>
      <span class="tag is-danger">99.2</span>
    </div>
  </div>
  <div class="control">
    <div class="tags has-addons">
      <span class="tag is-dark">Secret Society</span>
      <span class="tag is-info">12.4</span>
    </div>
  </div>
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
