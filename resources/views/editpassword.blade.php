@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <img src="/uploads/profile/{{ Auth::user()->image }}" style="width:100px; border-radius:50%;"  alt="Profile picture">

            <h3>Edit {{ Auth::user()->name }}'s Password. </h3>

            <form enctype="multipart/form-data" action="/editpassword" method="POST">
                <h3>Update Password</h3><br>
                <label>New password</label>
                <input type="password" name="password">
                <!-- hidden csrf token! for security -->
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <br action="/editpassword" method="POST">
                <input type="submit" value="Update password">
            </form>

            <a href="{{ url('/home') }}">Go Back</a>

        </div>
    </div>
</div>
@endsection