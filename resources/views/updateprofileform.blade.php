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

                    <p>Update this user</p>
                    
                   <form method="POST" action="updateprofileform">
                        <label>Name</label>
                        <input type="text" name="name"><br>
                        <label>E-mail</label>
                        <input type="text" name="email"><br>
                        <label>Bio</label>
                        <input type="text" name="bio"><br>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" value="Update profile">
                   </form>

                    
                    {{ csrf_field() }}
                  
                </div>
               
            </div>
        </div>
    </div>
</div>
@endsection
