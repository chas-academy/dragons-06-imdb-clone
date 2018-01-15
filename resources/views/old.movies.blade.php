@extends('layouts.default')
@section('title')
Titeln
@endsection
@section('content')
<section>
        <div class="hero is-large" style="background: -webkit-linear-gradient(top, rgba(212,228,239,1) 0%,rgba(134,174,204,1) 100%);background-size: cover;background-attachment: fixed">

          <div class="level"><!-- Hero head: will stick at the top
          Skall tas bort men kan sabba layouten -->
          </div><!--Slut Hero head-->

          <div class="hero-body has-text-centered"><!-- Hero content: will be in the middle -->
            <!-- Title and subtitle -->
            <div class="">

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
                <h2 class="title is-1 has-text-white-bis" style="font-size: 10rem;">
                  <output for="sliderWithValue">
                  10
                  </output>
                </h2>
            </div>

        <div class="title is-2">
          <h2>Rate the movie!</h2>
        </div>
        <div class="has-text-centered">
            <div class="field">
                <input id="sliderWithValue" class="slider is-large wide"   step="1" min="0" max="100" value="50" type="range">
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
        <article class="content is-medium">

            <p>The film starts with a group of babies in a day care center. Archie tells his friends, Finkleman, Alex, and Rosita, a story about Kahuna; according to Archie, Kahuna is a super baby with super strength and seemingly doesn't age, and he once rescued a group of children from an evil orphanage at the Berlin Wall run by a villainous overseer Biscane.</p>

            <p class="pull">
              <q>Kahuna transforms the babies into ‘superbabies’: Archie is Brain Boy, Alex is Bouncing Boy, Rosita is Cupid Girl, and Finkleman is Baby Courageous.</q>
            </p>

            <p>Back in the present day, Archie's father Stan, who owns the daycare, allows his center to be used as a filming location by the now TV mogul Biscane, who is starting up his own TV channel. Archie and the other babies sneak into Stan's office and decide to research Biscane but are caught. Archie overhears Biscane's helpers talking about their plan, accidentally attracting their attention, but he is rescued by Kahuna. Kylie the babysitter takes them all out to the children's museum, but Biscane's helpers accidentally knock their disc into the stroller. After a pursuit, Kahuna rescues them all; he then takes them all to his base. Kahuna transforms the babies into "superbabies": Archie is Brain Boy, Alex is Bouncing Boy, Rosita is Cupid Girl, and Finkleman is Baby Courageous.</p>

            <p>Later, Archie eavesdrops on Kylie and Zach, Kahuna's helper; Zack tells her that Kahuna's father was a scientist and developed a formula which Kahuna drank, transforming him into a super baby. Kahuna's brother became jealous and annoyed at his brother, whom his friends call a freak. When the father died, Kahuna was put into an orphanage; after escaping, he set out to rescue babies and children everywhere.</p>

            <p>The next day, Zack and Kylie find the disc that fell in the stroller earlier. The disc contains a clip of the program that is to be aired on Biscane's TV channel, followed by seemingly random code; they realize that Biscane is up to no good. The group spies on Biscane as he prepares to launch his channel, but Kahuna figures out that Biscane plans to take over the world through his TV channel by hypnotizing kids to never go outside, so he attacks the broadcast satellites, which causes him to disappear.</p>

            <p class="pull">
              <q>The babies decide to become their super alter egos to save Kahuna.</q>
            </p>

            <p>The babies decide to become their super alter egos to save Kahuna. With Stan, Archie's mom, Kylie, and Zack with them, they return to Kahuna's hideout and become Bounce Boy, Cupid Girl, Brain Boy and Courageous Boy. After having escaped his prison, Kahuna arrives, followed by Biscane and his goons. Biscane manages to get the disc he needs and begins to air the hypnotic clip on TV. Biscane then reveals the truth that he is actually Kahuna's jealous older brother, now much older than him. The babies then knock Biscane into Kahuna's machine and he becomes a baby, much to his despair. Kahuna reverses Biscane's TV clip and all the children decide to run and play outside. Kahuna tells Archie that he must go and though they'll always be friends. Kahuna leaves in his flying vehicle, waving at him and saying he'll always be a hero.</p>
        </article>
      </section>
    </main>
@endsection
