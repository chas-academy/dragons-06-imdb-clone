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
  <label class="label">Title</label>
  <div class="control">
    <input class="input" type="form-control" name="" placeholder="Enter title of the movie">
  </div>
</div>
<div class="field">
  <label class="label">Genre</label>
  <div class="control">
    <input class="input" type="form-control" name="" placeholder="Enter genre">
  </div>
</div>
<div class="field">
  <label class="label">Year</label>
  <div class="control">
    <input class="input" type="form-control" name="" placeholder="Enter movie year">
  </div>
  </div>
  <div class="field">
  <label class="label">Actors</label>
  <div class="control">
    <input class="input" type="form-control" name="" placeholder="Enter actors">
  </div>
  </div>
  <label class="label">Plot</label>
  <div class="field">
  <textarea class="textarea" name="" placeholder="Enter plot here" rows="8"></textarea>
</div>
<label class="label">Director</label>
  <div class="control">
    <input class="input" type="form-control" name="" placeholder="Enter Director">
  </div>
  <label class="label">Rating</label>
  <div class="control">
    <input class="input" type="form-control" name="" placeholder="Enter Rating">
  </div>
  <label class="label">Review</label>
  <div class="field">
  <textarea class="textarea" name="" placeholder="Enter your review" rows="8"></textarea>
</div>
<a class="button is-danger">
  Cancel
</a>

<a class="button is-success">
  Save
</a>

</body>
</html>
