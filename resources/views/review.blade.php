@extends('layouts.default')

@section('content')

<div class="field">
    <label class="label">Your Review</label>
        {!! Form::open() !!}
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

        


