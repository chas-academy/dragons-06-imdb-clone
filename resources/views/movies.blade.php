<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Movies</title>

        <!-- Fonts -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Movykyte.io – Superbabies 2</title>
    <style>
      .slideout-menu { left: auto; }
      .btn-hamburger { left: auto; right: 12px;}
      .box { height: 1500px; }
      .menu-section {
        margin-top:1em;
        padding-right: 24px;
        font-size: 1.5rem;
      }
      .synopsis p {
        margin-left: 30%;
        margin-right: 15%;
        //font-size: 1.5rem;
        text-align: justify;
        -webkit-hyphens: auto;
        -ms-hyphens: auto;
        hyphens: auto;
        hanging-punctuation: first;
      }
      .synopsis p.pullquote {
        width: calc(30% - 48px);
        margin: 24px;
        float: left;
        font-style: italic;
        font-weight: bold;
        text-align: left;
        font-size: 2rem;
      }
      q {
    quotes: "\201C" "\201D";
        }
      .synopsis p:first-child {
        padding-top: 2em;
      }
      .tabs a {
        color: white;
      }
    </style>

  </head>
  <body>
    <nav id="menu" class="menu">
      <header class="menu-header">
        <h2 class="title is-2">MoviKyte</h2>
      </header>

    <section class="menu-section" style="padding-right: 24px;"> <!-- Log in -->
      <div class="field">
        <p class="control has-icons-left has-icons-right">
          <input class="input" type="username" placeholder="Username">
          <span class="icon is-small is-left">
            <i class="fa fa-user-circle-o"></i>
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
      <span style="font-size: 0.75rem;">New user? <a href="#">Register!</a></span>


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
    <main class="columns is-gapless" id="panel">
      <section class="column">
        <div class="hero is-large" style="background: url(baby.jpeg);background-size: cover;background-attachment: fixed">
          <div class="level"><!-- Hero head: will stick at the top -->

            <!-- Search field -->
            <!-- Försök få skiten centrerad... -->
            <div class="level-item has-text-centered">
              <div class="field has-addons">
                <p class="control has-icons-left">
                  <input class="input is-large" >
                  <span class="icon is-left">
                    <i class="fa fa-search"></i>
                  </span>
                </p>
                <p class="control">
                 <a class="button is-info is-large">
                   Search
                 </a>
               </p>
              </div>
            </div>



          </div><!--Slut Hero head-->
          <div class="hero-body"><!-- Hero content: will be in the middle -->
            <!-- Title and subtitle -->
            <div class="columns">
              <div class="column has-text-right">
                <h1 class="title is-1 has-text-white-bis">
                  Superbabies 2
                </h1>
                <h2 class="subtitle is-3 has-text-white-bis">
                  Super Geniouses
                </h2>
                <span class="tag is-primary">
                  Comedy
                </span>
                <span class="tag is-info">
                  Action
                </span>
                <span class="tag is-warning">
                  Adventure
                </span>
              </div>
              <div class="column">
                <h1 class="title is-1 has-text-white-bis" style="font-size: 4rem;">
                  22.3
                </h1>
                <h2 class="subtitle is-3 has-text-white-bis">
                  <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
                </h2>
              </div>
            </div>
          </div><!--slut hero body-->
          <div class="hero-foot">
            <nav class="tabs is-boxed is-fullwidth">
              <div class="container is-size-5">
                <ul>
                  <li class="is-active"><a>Synopsis</a></li>
                  <li><a>Stats</a></li>
                  <li><a>Reviews</a></li>
                  <li><a>Trailers</a></li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
        <article class="content is-medium synopsis">

            <p>The film starts with a group of babies in a day care center. Archie tells his friends, Finkleman, Alex, and Rosita, a story about Kahuna; according to Archie, Kahuna is a super baby with super strength and seemingly doesn't age, and he once rescued a group of children from an evil orphanage at the Berlin Wall run by a villainous overseer Biscane.</p>

            <p class="pullquote">
              <q>Kahuna transforms the babies into ‘superbabies’: Archie is Brain Boy, Alex is Bouncing Boy, Rosita is Cupid Girl, and Finkleman is Baby Courageous.</q>
            </p>

            <p>Back in the present day, Archie's father Stan, who owns the daycare, allows his center to be used as a filming location by the now TV mogul Biscane, who is starting up his own TV channel. Archie and the other babies sneak into Stan's office and decide to research Biscane but are caught. Archie overhears Biscane's helpers talking about their plan, accidentally attracting their attention, but he is rescued by Kahuna. Kylie the babysitter takes them all out to the children's museum, but Biscane's helpers accidentally knock their disc into the stroller. After a pursuit, Kahuna rescues them all; he then takes them all to his base. Kahuna transforms the babies into "superbabies": Archie is Brain Boy, Alex is Bouncing Boy, Rosita is Cupid Girl, and Finkleman is Baby Courageous.</p>

            <p>Later, Archie eavesdrops on Kylie and Zach, Kahuna's helper; Zack tells her that Kahuna's father was a scientist and developed a formula which Kahuna drank, transforming him into a super baby. Kahuna's brother became jealous and annoyed at his brother, whom his friends call a freak. When the father died, Kahuna was put into an orphanage; after escaping, he set out to rescue babies and children everywhere.</p>

            <p>The next day, Zack and Kylie find the disc that fell in the stroller earlier. The disc contains a clip of the program that is to be aired on Biscane's TV channel, followed by seemingly random code; they realize that Biscane is up to no good. The group spies on Biscane as he prepares to launch his channel, but Kahuna figures out that Biscane plans to take over the world through his TV channel by hypnotizing kids to never go outside, so he attacks the broadcast satellites, which causes him to disappear.</p>

            <p class="pullquote">
              <q>The babies decide to become their super alter egos to save Kahuna.</q>
            </p>

            <p>The babies decide to become their super alter egos to save Kahuna. With Stan, Archie's mom, Kylie, and Zack with them, they return to Kahuna's hideout and become Bounce Boy, Cupid Girl, Brain Boy and Courageous Boy. After having escaped his prison, Kahuna arrives, followed by Biscane and his goons. Biscane manages to get the disc he needs and begins to air the hypnotic clip on TV. Biscane then reveals the truth that he is actually Kahuna's jealous older brother, now much older than him. The babies then knock Biscane into Kahuna's machine and he becomes a baby, much to his despair. Kahuna reverses Biscane's TV clip and all the children decide to run and play outside. Kahuna tells Archie that he must go and though they'll always be friends. Kahuna leaves in his flying vehicle, waving at him and saying he'll always be a hero.</p>
        </article>
      </section>
      <section class="column is-narrow js-slideout-toggle">
        <img src="kite.svg" style="padding: 2px; padding-top: 1em;" height="48px" width="48px">
      </section>
    </main>
    <script src="js/app.js"></script>
  </body>
</html>
