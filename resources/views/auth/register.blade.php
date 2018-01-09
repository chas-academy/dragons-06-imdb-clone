@extends('layouts.default')

@section('content')
<section class="hero is-medium is-primary is-bold">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        Register
      </h1>
      <h2 class="subtitle">
        Be a part of our MoveKyte World!
      </h2>
    </div>
  </div>
</section>
<section>
                <div class="">
                    <form class="form-horizontal"
                          method="POST"
                          action="{{ route('register') }}">

                        {{ csrf_field() }}

                        <div class="field {{ $errors->has('name') ? ' is-warning' : '' }}">
                            <label for="name"
                                   class="">Name
                            </label>

                            <div class="control">
                                <input id="name"
                                        type="text"
                                        class="input"
                                        name="name"
                                        value="{{ old('name') }}"
                                        required
                                        autofocus>
                            </div>

                            @if ($errors->has('name'))
                                    <span class="help">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                              @endif
                        </div>

                        <div class="field {{ $errors->has('email') ? ' has-error' : '' }}">

                            <label for="email"
                                   class="">E-Mail Address
                            </label>

                            <div class="control">
                                <input id="email"
                                       type="email"
                                       class="input"
                                       name="email"
                                       value="{{ old('email') }}"
                                       required>

                                @if ($errors->has('email'))
                                    <span class="help">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="field {{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password"
                                   class="">
                                   Password
                            </label>

                            <div class="control">
                                <input id="password"
                                       type="password"
                                       class="input"
                                       name="password"
                                       required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="field">
                            <label for="password-confirm"
                                   class="">
                                   Confirm Password
                            </label>

                            <div class="control">
                                <input id="password-confirm"
                                       type="password"
                                       class="input"
                                       name="password_confirmation"
                                       required>
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <button type="submit"
                                        class="button is-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
</section>
@endsection
