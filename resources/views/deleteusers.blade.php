@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Delete users</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(session()->has('message'))
                            <div>
                                {{ session()->get('message') }}
                            </div>
                    @endif

                    <table class="table">

                    <thread>
                        <tr>
                            <th>Name</th>
                            <th>E-mail</th>
                            <th>Image</th>
                            
                        </tr>
                    </thread>
                    <tbody>
                        
                            @foreach ($users as $user)
                                <tr>
                                <form enctype="multipart/form-data" action="/admin/deleteusers" method="POST">
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td><img src="uploads/user/{{ $user->image }}"></td>
                                <td><input type="hidden" name="id" value="{{ $user->id }}"></td>
                                <td><input type="hidden" name="_token" value="{{ csrf_token() }}"></td>
                                <td><input type="submit" value="Delete user"></td>
                                </form>
                                </tr>
                            
                            @endforeach
                            
                        
                    </tbody>




                    </table>


                    
                    {{ csrf_field() }}
                  
                </div>
               
            </div>
        </div>
    </div>
</div>
@endsection
