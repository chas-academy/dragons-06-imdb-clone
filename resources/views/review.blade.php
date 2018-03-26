@extends('layouts.default')
@section('title', '| Review')

@section('content')

                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Body</th>
                            <th>Timestamp</th>
                            <th></th>


                        </tr>
                    </thead>

                    <tbody>
                        <?php var_dump($reviews); die; ?>
                          @foreach ($reviews as $review)
                            <tr>
                                <th> {{ $review->id }} </th>
                                <td> {{ $review->title }} </td>
                                <td> {{ substr($review->body, 0, 50) }} {{ strlen($review->body) > 50 ? "..." : ""}} </td>
                                <td> {{ date('M j, Y', strtotime($review->created_at)) }} </td>
                                <td><a href=" {{ route('review.show' , $review->id) }} " class="button is-secondary button is-small">View</a></td>
                                <td><a href="" class="button is-secondary button is-small">Edit</a></td>
                            </tr>

                        { @endforeach
                    </tbody>
                </table>

                <div>
                     {!! $reviews->links(); !!}
                </div>


          <div class="field">
            <label class="label">Your Review</label>
                {!! Form::open(array('route' => 'review.store')) !!}
            <div class="control">
                {{ Form::text('title', null, array('class' => 'input')) }}
            </div>

        <div class="field">
            <div class="control">
                {{ Form::textarea('body', null, array('class' => 'textarea')) }}
            </div>

            <div class="control">
                {{ Form::submit('Post Review', array('class' => 'button is-success button is-large')) }}
            </div>
            </div>
                {!! Form::close() !!}
        </div>




@endsection






