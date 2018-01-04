@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <img src="/uploads/profile/{{ Auth::user()->image }}" style="width:100px; border-radius:50%;"  alt="Profile picture">
            <h3>Edit {{ Auth::user()->name }}'s Profile. </h3>
            <form enctype="multipart/form-data" action="/editprofile" method="POST">
                <label>Update Profile Picture</label><br>
                <input type="file" name="image">
                <!-- hidden csrf token! for security -->
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <br>
                <input type="submit" value="Update picture">
            </form>
            <br>
            <form enctype="multipart/form-data" action="/editprofile" method="POST">
                <label>Update Profile</label><br>
                <label>Bio: </label><textarea type="text" name="bio" rows="5" cols="35">{{ Auth::user()->bio }}</textarea>
                <br>
                <label>Name: </label><input type="text" name="name" value="{{ Auth::user()->name }}">
                <!-- hidden csrf token! for security -->
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <br>
                <input type="submit" value="Update profile">
            </form>
            <a href="{{ url('/home') }}">Go Back</a>
        </div>
    </div>
</div>
@endsection