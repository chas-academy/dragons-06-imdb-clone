<h1>Add button test</h1>
<ul>
<li>
<form action="{{ route('add',['movie'=>$movieId,'user'=>$userId]) }}" method="post">
    <button type="submit">Add to watchlist</button>
</form>
</li>
</ul>