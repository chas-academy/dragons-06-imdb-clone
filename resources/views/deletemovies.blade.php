@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Delete movies</div>

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
                            <th>Title</th>
                            
                            <th>Plot</th>
                            <th>Image</th>
                            
                        </tr>
                    </thread>
                    <tbody>
                        
                            @foreach ($movies as $movie)
                                <tr>
                                <form enctype="multipart/form-data" action="/admin/deletemovies" method="POST">
                                <td>{{ $movie->title }}</td>
                                <td><input type="hidden" name="id" value="{{ $movie->id }}"></td>
                                <td><input type="hidden" name="_token" value="{{ csrf_token() }}"></td>
                                <td><input type="submit" value="Delete movie"></td>
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
