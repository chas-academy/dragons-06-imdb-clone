@extends('layouts.default')
@section('title')
MovieKyte! Movies high as hell!
@endsection
@section('content')
<section class="section">
      <div class="container">
          <img class="img_logo" src="/images/moviekyte_logo.png" alt="">
      </div>
</section>

<section class="hero is-large has-bg-img is-fullheight">
      <div class="hero-body">
        <h2 class="title-2">
          Some kind of headin
        </h2>
      </div>
</section>

  <section class="section">
    <div class="columns is-variable is-1">
        <div class="column is-one-quarter is-centered">
          <button class="button is-warning is-fullwidth">Top-10 Movies</button>
        </div>
        <div class="column">
          <button class="button is-light is-fullwidth">Latest Movies</button>
        </div>
        <div class="column">
          <button class="button is-light is-fullwidth">Movie Playlist</button>
        </div>
        <div class="column">
          <button class="button is-light is-fullwidth">Views</button>
        </div>
    </div>
  </section>

    <section class="section">
        <div class="columns is-mobile">
            <div class="column">
                <div class="columns">
                    <div class="column">
                        <img src="/images/MV5BMTc0MjA1OTMxOV5BMl5BanBnXkFtZTgwMzM1NDcyNDM@._V1_.jpg" alt="">
                    </div>
                    <div class="column">
                        <img src="/images/MV5BMTc0MjA1OTMxOV5BMl5BanBnXkFtZTgwMzM1NDcyNDM@._V1_.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="columns">
                    <div class="column">
                        <img src="/images/MV5BOGNkMzliMGMtMDI5Ni00OTZkLTgyMTYtNzk5ZTY1NjVhYjVmXkEyXkFqcGdeQXVyNTAzMTY4MDA@._V1_SY1000_SX675_AL_.jpg" alt="">
                    </div>
                    <div class="column">
                        <img src="/images/MV5BYWVhZjZkYTItOGIwYS00NmRkLWJlYjctMWM0ZjFmMDU4ZjEzXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_SY1000_SX675_AL_.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
