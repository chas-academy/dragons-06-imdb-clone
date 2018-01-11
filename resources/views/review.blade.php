@extends('layouts.default')
@section('title', '| Review')

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
                  <li><a>Synopsis</a></li>
                  <li><a>Stats</a></li>
                  <li class="is-active"> <a href=" {{ route('review.create') }} ">Review Movie</a></li>
                  <li><a>Trailers</a></li>
                </ul>
              </div>
            </nav>
          </div>
        </div>

        
      
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Body</th>
                            <th>Timestamp</th>
                            <th></th>

                            
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($reviews as $review)

                            <tr>
                                <th> {{ $review->id }} </th>
                                <td> {{ $review->title }} </td>
                                <td> {{ substr($review->body, 0, 50) }} {{ strlen($review->body) > 50 ? "..." : ""}} </td>
                                <td> {{ date('M j, Y', strtotime($review->created_at)) }} </td>
                                <td><a href=" {{ route('review.show' , $review->id) }} " class="button is-secondary button is-small">View</a></td>
                                <td><a href="" class="button is-secondary button is-small">Edit</a></td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>
            

        <div class="field">
            <label class="label">Your Review</label>
                {!! Form::open(array('route' => 'review.store')) !!}
            <div class="control">
                {{ Form::text('title', null, array('class' => 'input')) }}
            </div>

        <div class="field"> 
            <div class="control">
                {{ Form::textarea('body', null, array('class' => 'textarea')) }}
            </div>

            <div class="control">
                {{ Form::submit('Post Review', array('class' => 'button is-success button is-large')) }}
            </div>
            </div>
                {!! Form::close() !!}
        </div>

      </section>
 

@endsection



        


