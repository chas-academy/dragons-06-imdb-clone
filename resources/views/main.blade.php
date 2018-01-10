@extends('layouts.default')
@section('title')
MovieKyte! Movies high as hell!
@endsection
@section('content')


<div class='carousel'>
  <div class='carousel-container is-0'>
    <div class='carousel-content carousel-animate carousel-animate-slide'>
      <div class='carousel-item'>
        <img class="is-background" src="https://wikiki.github.io/images/merry-christmas.jpg" alt="" width="640" height="310" />
        
      </div>
      <div class='carousel-item'>
        <img class="is-background" src="https://wikiki.github.io/images/singer.jpg" alt="" width="640" height="310" />
        
      </div>
      <div class='carousel-item'>
        <img class="is-background" src="https://wikiki.github.io/images/sushi.jpg" alt="" width="640" height="310" />
        
      </div>
      <div class='carousel-item'>
        <img class="is-background" src="https://wikiki.github.io/images/life.jpg" alt="" width="640" height="310" />
        
      </div>
    </div>
    <div class="carousel-nav-left is-hidden">
      <i class="fa fa-chevron-left" aria-hidden="true"></i>
    </div>
    <div class="carousel-nav-right is-hidden">
      <i class="fa fa-chevron-right" aria-hidden="true"></i>
    </div>
  </div>
</div>


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
  
    

<script>
function goNext() {
    console.log("goNext");
    let carouselRight = document.querySelector('.carousel-nav-right');
 
    carouselRight.click();

    setTimeout(goNext, 5000);
};

window.addEventListener('load', function(){ setTimeout(goNext, 5000);});
</script>

@endsection
