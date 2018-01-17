
@section('title')
Your watchlist
@endsection

<h1>Your watchlist</h1>

@foreach($movies as $film)
<ul>
    <li>{{$film->title}}</li>
<ul>
@endforeach