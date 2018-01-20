

<nav id="menu" class="menu" style="">

      <header class="menu-header">
        <h2 class="title is-2">MoviKyte</h2>
      </header>

    <section class="menu-section" style=""> <!-- Log in, skall includas sen -->
      @guest
      @include('blocks.login')
      @else
      <div class="card">
    <div class="card-content">
      <div class="media">
            <div class="media-left">
              <figure class="image is-48x48">
                <img src="/uploads/profile/default.png" alt="Its you!">
              </figure>
            </div>
            <div class="media-content">
              <p class="title is-5">{{ Auth::user()->name }}
                <br>
               Surname</p>
            </div>
          </div>

          <div class="content is-small">
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"
                class="button">
                Logout
            </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>

          </div>
        </div>

      </div>
      @endguest
    </section> <!-- End longin -->

    <section class="menu-section">
      <h3 class="menu-label">Movie Genre</h3>
      <ul class="menu-list">
        <li><a href="#" target="_blank" class="is-active">Comedy</a></li>
        <li><a href="#" target="_blank" >Drama</a></li>
        <li><a href="#" target="_blank">Romance</a></li>
        <li><a href="#" target="_blank">Horror</a></li>
        <li><a href="#" target="_blank">Sci-fi</a></li>
        <li><a href="#" target="_blank">Family</a></li>
        <li><a href="#" target="_blank">Kids</a></li>
        <li><a href="#" target="_blank">Thriller</a></li>
        
      </ul>
    </section>

    <section class="menu-section">
      <h3 class="menu-label">Your Account</h3>
      <ul class="menu-list">
        <li><a href="#" target="_blank">Profile</a></li>
        <li><a href="#" target="_blank">Watchlist</a></li>
        <li><a href="#" target="_blank">Reviews</a></li>
      </ul>
    </section>

</nav>
