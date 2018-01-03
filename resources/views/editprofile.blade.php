@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <img src="/uploads/profile/{{ $user->image }}" style="width:120px; border-radius:50%;"  alt="Profile picture">
            <h3>{{ $user->name }}'s Profile. </h3>
            <form enctype="multipart/form-data" action="/editprofile" method="POST">
                <label>Update Profile Picture</label><br>
                <input type="file" name="image">
                <label>Bio: </label><textarea type="text" name="bio" rows="5" cols="35">{{ $user->bio }}</textarea>
                <label>Name: </label><input type="text" name="name" value="{{ $user->name }}">
                <!-- hidden csrf token! for security -->
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" value="Update">
            </form>
            <a href="{{ url('/home') }}">Go back without saving</a>
        </div>
    </div>
</div>
@endsection