@extends('layouts.default')
@section('title')
MovieKyte! Movies high as hell!
@endsection
@section('content')


    <!--  Form for creating movies  -->
    
      
    <div class="create-background">
    <h1 class="title is-2 has-text-white has-text-weight-light">Explore Movies</h1>
    
    <div class="create-field-container">
    <div class="field">
  <label class="label has-text-white">Title</label>
  <div class="control">
    <input class="input" type="form-control" name="" placeholder="Enter title of the movie">
  </div>
</div>
<div class="field">
  <label class="label has-text-white">Genre</label>
  <div class="control">
    <input class="input" type="form-control" name="" placeholder="Enter genre">
  </div>
</div>
<div class="field">
  <label class="label has-text-white">Year</label>
  <div class="control">
    <input class="input" type="form-control" name="" placeholder="Enter movie year">
  </div>
  </div>
  <div class="field">
  <label class="label has-text-white">Actors</label>
  <div class="control">
    <input class="input" type="form-control" name="" placeholder="Enter actors">
  </div>
  </div>
  <label class="label has-text-white">Plot</label>
  <div class="field">
  <textarea class="textarea" name="" placeholder="Enter plot here" rows="8"></textarea>
</div>
<label class="label has-text-white">Director</label>
  <div class="control">
    <input class="input" type="form-control" name="" placeholder="Enter Director">
  </div>
  <label class="label has-text-white">Rating</label>
  <div class="control">
    <input class="input" type="form-control" name="" placeholder="Enter Rating">
  </div>
  <label class="label has-text-white">Review</label>
  <div class="field">
  <textarea class="textarea" name="" placeholder="Enter your review" rows="8"></textarea>
</div>
    </div>
    <div class="create-button-container">
<div class="field is-grouped">
  <p class="control">
    <a class="button is-danger">
      Save
    </a>
  </p>
  <p class="control">
    <a class="button is-primary">
      Cancel
    </a>
  </p>
</div>
</div>

@endsection
