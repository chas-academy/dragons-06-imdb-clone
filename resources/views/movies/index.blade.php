@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 5.5 CRUD Example from scratch</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('movies.create') }}"> Create New Article</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Body</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($movies as $movie)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $movie->title}}</td>
        <td>{{ $movie->body}}</td>
        <td>
            <a class="btn btn-info" href="{{ route('movies.show',$movie->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('movies.edit',$movie->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['movies.destroy', $movie->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>

    {!! $movies->links() !!}
@endsection