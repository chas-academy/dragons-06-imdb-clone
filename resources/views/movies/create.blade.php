<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Create movie</title>
</head>
<body>
    <!--  Form for creating movies  -->
<div class="field">
  {!! Form::open(['route' => 'movies.store']) !!}
    <label class="label">Title</label>
      <div class="control">
      {{ Form::text('Title', null, array('class' => 'input')) }}
      </div>
    <label class="label">Genre</label>
    <div class="control">
      {{ Form::text('Genre', null, array('class' => 'input')) }}
      </div>
    <label class="label">Year</label>
    <div class="control">
      {{ Form::text('Year', null, array('class' => 'input')) }}
      </div>
    <label class="label">Actors</label>
    <div class="control">
      {{ Form::text('Actors', null, array('class' => 'input')) }}
      </div>
    <label class="label">Plot</label>
    <div class="control">
      {{ Form::textarea('Plot', null, array('class' => 'textarea')) }}
      </div>
    <label class="label">Director</label>
    <div class="control">
      {{ Form::text('Director', null, array('class' => 'input')) }}
      </div>
    <label class="label">Rating</label>
    <div class="control">
      {{ Form::text('Rating', null, array('class' => 'input')) }}
      </div>
    <label class="label">Review</label>
    <div class="control">
      {{ Form::text('Review', null, array('class' => 'input')) }}
      </div>
 <div class="control">
      {{ Form::submit('Add movie', array('class' => 'button is-success is-large')) }}
      </div>
  {!! Form::close() !!}
</div>


</body>
</html>
