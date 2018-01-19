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
                    @if(session()->has('message'))
                            <div>
                                {{ session()->get('message') }}
                            </div>
                    @endif

                    <table class="table">

                    <thread>
                        <tr>
                            <th>Title</th>
                            <th>Genre</th>
                            <th>Year</th>
                            <th>Actors</th>
                            <th>Plot</th>
                            <th>Directors</th>
                            <th>Image</th>
                            
                        </tr>
                    </thread>
                    <tbody>
                        
                            @foreach ($movies as $movie)
                                <tr>
                                <form enctype="multipart/form-data" action="/admin/editmovies" method="POST">
                                <td><input type="text" name="title" value="{{ $movie->title }}"></td>
                                <td><input type="text" name="genre" value="{{ $movie->genre }}"></td>
                                <td><input type="text" name="year" value="{{ $movie->year }}"></td>
                                <td><input type="text" name="actors" value="{{ $movie->actors }}"></td>
                                <td><input type="text" name="plot" value="{{ $movie->plot }}"></td>
                                <td><input type="text" name="director" value="{{ $movie->director }}"></td>
                                <td><img src="/uploads/movie/{{ $movie->image }}"></td>
                                <td><input type="file" name="image"></td>
                                
                                <td><input type="hidden" name="id" value="{{ $movie->id }}"></td>
                                <td><input type="hidden" name="_token" value="{{ csrf_token() }}"></td>
                                <td><input type="submit" value="Update profile"></td>
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
