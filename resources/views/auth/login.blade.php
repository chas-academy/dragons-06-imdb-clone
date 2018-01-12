@extends('layouts.default')

@section('content')
<section class="hero is-medium is-primary is-bold">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        Log in
      </h1>
      <h2 class="subtitle">
        Enter MovieKyte!
      </h2>
    </div>
  </div>
</section>
<div class="container margin">
    @include('blocks.login')
</div>
@endsection
