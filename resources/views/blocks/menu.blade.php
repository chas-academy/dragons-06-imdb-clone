<nav id="menu" class="menu" style="">

      <header class="menu-header">
        <h2 class="title is-2">MovieKyte</h2>
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
      <h3 class="menu-label">Movies</h3>
      <ul class="menu-list">
        <li><a href="#" target="_blank" class="is-active">Title</a></li>
        <li><a href="#" target="_blank">Actor</a></li>
        <li><a href="#" target="_blank">Rating</a></li>
        <li><a href="#" target="_blank">Other</a></li>
      </ul>
    </section>

    <section class="menu-section">
      <h3 class="menu-label">Reviews</h3>
      <ul class="menu-list">
        <li><a href="#" target="_blank">Read</a></li>
        <li><a href="#" target="_blank">Write</a></li>
        <li><a href="#" target="_blank">Comment</a></li>
        <li><a href="#" target="_blank">Search</a></li>
      </ul>
    </section>

</nav>
