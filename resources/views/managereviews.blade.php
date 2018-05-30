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
                              <th>Body</th>
                              <th>Rating</th>
                         </tr>
                      </thread>
                      <tbody>
                          @foreach ($reviews as $review)
                              <tr>
                                <form enctype="multipart/form-data" action="{{ route('review.update', ['review' => $review->id]) }}" method="POST">
                                  {{ method_field('PUT') }}
                                  <td><input class="input" type="text" name="title" value="{{ $review->title }}"></td>
                                  <td><input class="input" type="text" name="body" value="{{ $review->body }}"></td>
                                  <td><input class="input" type="text" name="rating" value="{{ $review->rating }}"></td>

                                  <td><input class="input" type="hidden" name="review_id" value="{{ $review->id }}"></td>
                                  <td><input class="input" type="hidden" name="_token" value="{{ csrf_token() }}"></td>
                                  <td><button class="button" type="submit">Update review</button></td>
                                  <td><a class="button" href="/review/{{$review->id}}/delete">Delete review</a></td>
                                </form>
                              </tr>
                            @endforeach
                      </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
