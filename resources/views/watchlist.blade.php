@extends('layouts.app')
@section('title')
Your watchlist
@endsection

<h1 class="title">Your watchlist</h1>

@foreach($movies as $film)
<ul>
    <li>{{$film->title}} {{$film->year}} <button href="/watchlist/delete/{{$film->id}}" type="submit">Delete</button></li>
<ul>
@endforeach

