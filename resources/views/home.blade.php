@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Hello there {{ Auth::user()->name }}! Welcome to your profile page.

                    <img src="/uploads/profile/{{ Auth::user()->image }}" style="width:100px; border-radius:50%;" alt="Profile picture">
                    <br>
                    my bio:
                    <div style="border: solid 1px black;">
                        {{ Auth::user()->bio }}
                    </div>
                    
                    {{ csrf_field() }}
                    <a href="{{ url('/editprofile') }}">edit profile</a>

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
