@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Admin</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Hello there admin {{ Auth::admin()->name }}! Welcome to your profile page.

                    
                    {{ csrf_field() }}
                    <a href="{{ url('/editprofile') }}">edit profile</a>
                    <br>
                    <a href="{{ url('/editpassword') }}">change password</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
