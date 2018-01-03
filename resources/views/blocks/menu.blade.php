<nav id="menu" class="menu" style="">

      <header class="menu-header">
        <h2 class="title is-2">MoviKyte</h2>
      </header>

    <section class="menu-section" style=""> <!-- Log in, skall includas sen -->
      @guest
      <div class="field">
        <p class="control has-icons-left has-icons-right">
          <input class="input" type="username" placeholder="Username">
          <span class="icon is-small is-left">
            <i class="fa fa-user-circle"></i>
          </span>
          <span class="icon is-small is-right">
            <i class="fa fa-check"></i>
          </span>
        </p>
      </div>
      <div class="field has-addons">
        <p class="control has-icons-left">
          <input class="input" type="password" placeholder="Password">
          <span class="icon is-small is-left">
            <i class="fa fa-lock"></i>
          </span>
        </p>
        <p class="control">
        <button class="button is-primary">
          Login
        </button>
      </p>
      </div>
      <span class="smaller">New user? <a href="#">Register!</a></span>
      @else
      <div class="card">
    <div class="card-content">
      <div class="media">
            <div class="media-left">
              <figure class="image is-48x48">
                <img src="/uploads/profile/{{ Auth::user()->image }}" alt="It's you!">
              </figure>
            </div>
            <div class="media-content">
              <p class="title is-4">{{ Auth::user()->name }}
                <br>
               Surname</p>
            </div>
          </div>

          <div class="content is-small">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Phasellus nec iaculis mauris. <a>@bulmaio</a>.
            <a href="#">#css</a> <a href="#">#responsive</a>

          </div>
        </div>

<a class="button" href="#">Knapp</a>

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
