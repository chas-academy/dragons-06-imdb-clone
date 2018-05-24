@extends('layouts.default')

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

                    <p>Welcome mr manager called "{{ Auth::user()->name }}", to the admin page</p>

                    <a href="{{ url('admin/editusers') }}">Edit users</a><br>
                    <a href="{{ url('admin/deleteusers') }}">Delete users</a><br>
                    <br><br>
                    <a href="{{ url('admin/create') }}">Add movies</a><br>
                    <a href="{{ url('admin/editmovies') }}">Edit movies</a><br>
                    <a href="{{ url('admin/deletemovies') }}">Delete movies</a><br>
                    {{ csrf_field() }}

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
