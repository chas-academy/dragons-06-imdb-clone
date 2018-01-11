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

                    <p>Welcome Admin "{{ Auth::user()->name }}", to the edit users page</p>
                    <a href="{{ url('admin') }}">Go back</a>
                    <table class="table">

                    <thread>
                        <tr>
                            <th>Name</th>
                            <th>email</th>
                            <th>bio</th>
                            <th>created at</th>
                            <th>updated at</th>
                        </tr>
                    </thread>
                    <tbody>
                        
                            @foreach ($users as $user)
                            <form enctype="multipart/form-data" action="editusers" method="POST">
                                <tr>
                                <td><input type="text" name="name" value="{{ $user->name }}"></td>
                                <td><input type="text" name="name" value="{{ $user->email }}"></td>
                                <td><input type="text" name="name" value="{{ $user->bio }}"></td>
                                <td>{{ $user->created_at }}</td>
                                <td>{{ $user->updated_at }}</td>
                                <td><input type="hidden" name="_token" value="{{ csrf_token() }}"></td>
                                <td><input type="submit" value="Update profile"></td>

                                <!--<td><a href="<?php echo $user->id ?>">Edit</a></td>
                                <td><a href="<?php echo $user->id ?>">Delete</a></td>-->
                                </tr>
                            </form>
                             @endforeach 
                            
                        
                    </tbody>




                    </table>
                    <!--@foreach ($users as $user)
                        {{ $user->name }}
                        {{ $user->email }}
                        {{ $user->bio }}
                        {{ $user->created_at }}
                        {{ $user->updated_at }}
                    @endforeach --> 


                    
                    {{ csrf_field() }}
                  
                </div>
               
            </div>
        </div>
    </div>
</div>
@endsection
