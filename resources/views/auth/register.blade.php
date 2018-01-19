@extends('layouts.default')

@section('content')


<div class="register-background-image">

    <section class="register-form">
    <h1 class="title is-2 has-text-white has-text-weight-light">Create account</h1>
                
                    <form class="form-horizontal"
                          method="POST"
                          action="{{ route('register') }}">

                        {{ csrf_field() }}

                        <div class="field {{ $errors->has('name') ? ' is-warning' : '' }}">
                            <label for="name"
                                   class="has-text-light">Your name
                            </label>

                            <div class="control has-icons-left has-icons-right">
                                 <input id="name"
                                        type="text"
                                        class="input"
                                        name="name"
                                        value="{{ old('name') }}"
                                        required
                                        autofocus>
                            <span class="icon is-small is-left"> 
                            <i class="fas fa-user"></i></span>
                
                            </div>
                            

                            @if ($errors->has('name'))
                                    <span class="help">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                              @endif
                        </div>

                        <div class="field {{ $errors->has('email') ? ' has-error' : '' }}">

                            <label for="email"
                                   class="has-text-light">E-mail
                            </label>

                            <div class="control has-icons-left has-icons-right">
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
                                <span class="icon is-small is-left">
                                <i class="fas fa-envelope"></i></span>
                                <span class="icon is-small is-right"></span>
                                <span class="icon is-small is-right"></span>
                            </div>
                            
                        </div>

                        <div class="field {{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password"
                                   class="has-text-light">
                                   Password
                            </label>

                            <div class="control has-icons-left">
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
                                <span class="icon is-small is-left">
                                <i class="fas fa-lock"></i></span>
                            </div>
                        </div>

                        <div class="field">
                            <label for="password-confirm"
                                   class="has-text-light">
                                   Confirm password
                            </label>

                            <div class="control has-icons-left">
                                <input id="password-confirm"
                                       type="password"
                                       class="input"
                                       name="password_confirmation"
                                       required>
                                       <span class="icon is-small is-left">
                                       <i class="fas fa-lock"></i></span>
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <button type="submit"
                                        class="button is-primary is-outlined">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                
</section>
</div>


@endsection
