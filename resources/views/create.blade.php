@extends('layouts.default')
@section('title')
MovieKyte! Movies high as hell!
@endsection
@section('content')


    <!--  Form for creating movies  -->
    
      
    <div class="create-background">
    <section class="main-title-create">
<h1 class="title is-2 has-text-white has-text-weight-light">Add New Movie</h1>
  </section>

  <!-- no need to define the error-variable, in case you're wondering -->
  @if($errors->any())
   <div class>
    <ul>
      @foreach($errors->all() as $error)
       <li>
          {{ $error }}
       </li>
      @endforeach
    </ul>
  </div>
  @endif
  
  <form class="form-horizontal"
        method="POST"
        action="/admin/storemovie"
        enctype="multipart/form-data">

    {{csrf_field()}}
    <div class="create-field-container">
    <div class="field">
  <label class="label has-text-white">Title</label>
  <div class="control">
    <input enctype="multipart/form-data" class="input" type="text" type="form-control" name="title" placeholder="Enter title of the movie">
  </div>
</div>
<div class="field">
  <label class="label has-text-white">Genre</label>
  <div class="control">
    <input class="input" type="text" type="form-control" name="genre" placeholder="Enter genre">
  </div>
</div>
<div class="field">
  <label class="label has-text-white">Year</label>
  <div class="control">
    <input class="input" type="text" type="form-control" name="year" placeholder="Enter movie year">
  </div>
  </div>
  <div class="field">
  <label class="label has-text-white">Actors</label>
  <div class="control">
    <input class="input" type="text" type="form-control" name="actors" placeholder="Enter actors">
  </div>
  </div>
  <label class="label has-text-white">Plot</label>
  <div class="field">
  <textarea class="textarea" type="text" name="plot" placeholder="Enter plot here" rows="8"></textarea>
</div>
<label class="label has-text-white">Director</label>
  <div class="control">
    <input class="input" type="text" type="form-control" name="director" placeholder="Enter Director">
  </div>
  <label class="label has-text-white">Image</label>
  <div class="control">
    <input class="input" type="file" name="image">
  </div>
    </div>
    <div class="create-button-container">
<div class="field is-grouped">
  <p class="control">
    <input type="submit" class="button is-primary">
    </input>
  </p>
  <p class="control">
    <a class="button is-danger">
      Cancel
    </a>
  </p>
</div>
</div>
</div>
</form>

@endsection
